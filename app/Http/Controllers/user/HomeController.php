<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Helpers;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Futurelit_session;
use App\Models\Book_sessions;
use PaytmWallet;
use Session;
use App\Models\User_information;
use App\Models\Faq;
use App\Models\Testimonial;
use App\Models\HelpForm;
use App\Models\QueryForm;
use App\Models\SubscribeEmail;
use App\Models\Tag;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use App\Models\BlogLikeDislike;
use App\Models\BlogView;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use App\Models\UserNotification;
use App\Models\CareerLibraryCategory;
use App\Models\CareerLibraryDetails;
use App\Models\CareerLibraryVote;
use App\Models\HelpFaqCategory;

class HomeController extends Controller
{
    public function indexHome(){
        $allSession = Futurelit_session::get();
        $faq = Faq::where('type','home')->get();
        $studentTestimonial = Testimonial::where('type','student')->where('category','home')->get();
        $parentTestimonial = Testimonial::where('type','parent')->where('category','home')->get();
        $latestBlog = Blog::orderBy('id', 'DESC')->get();
        return view('user.home',compact(['allSession','faq','studentTestimonial','parentTestimonial','latestBlog']));
    }
    public function demoRegistration(Request $request){
        $validator = Validator::make($request->all(), [
            'reg_email' => 'required',
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error($value[0],'error');
        	}
        	return back()->withInput();
        }

        $exits = User::where('email',$request->reg_email)->where('role','user')->get()->count();

        if($exits > 0){
            Toastr::error('Your email is already existed try to login your account','error');
            return back()->withInput();
        }

        return Redirect('/login-signup?reg='.$request->reg_email);
    }
    public function booksessionFunction(Request $request){
        //print_r($request->all());
        // echo date('H:i:s',strtotime($request->schedule_time));
        //die();
        $validator = Validator::make($request->all(), [
            'candidate_name' => 'required',
            'candidate_email' => 'required',
            'candidate_phone' => 'required',
            'candidate_city' => 'required',
            'options' => 'required',
            'schedule_date' => 'required',
            'schedule_time' => 'required'
        ]);

        if ($validator->fails()) {
        	Toastr::error('All fields are mandatory','error');
        	return back()->withInput();
        }

        try {
            $sessionPrice = Helpers::getSessionPrice($request->options);
            Session::put('session_book_data',$request->all());
            if($sessionPrice == 0){

                $timeFormat = date('H:i:s',strtotime($request->schedule_time));
                $dateFormat = date('Y-m-d',strtotime($request->schedule_date));

                $book = new Book_sessions();
                $book->candidate_name = $request->candidate_name;
                $book->candidate_email = $request->candidate_email;
                $book->candidate_phone = $request->candidate_phone;
                $book->candidate_city = $request->candidate_city;
                $book->options = $request->options;
                $book->schedule_date_time = $dateFormat.' '.$timeFormat;
                $book->save();
                if(Auth::guard('user')->check()){
                    $notificationContent = "Session Confirmed! Your booking is all set. Get ready for an insightful and engaging session. We're excited to connect with you and provide valuable insights. See you soon!";
                    Helpers::addUserNotification(Auth::guard('user')->user()->id,'book_session','Book Session','session',$notificationContent);
                }
                Toastr::success('Book session Successfully','success');
                return back();
            }else{

                $payment = PaytmWallet::with('receive');
                $payment->prepare([
                'order' => rand(),
                'user' => rand(10,1000),
                'mobile_number' => $request->candidate_phone,
                'email' => $request->candidate_email,
                'amount' => $sessionPrice,
                'callback_url' => url('/payment-callback'),
                ]);
                return $payment->receive();

            }


        } catch (Exception $e) {
            Toastr::error('something went wrong','error');
        	return back()->withInput();
        }

    }
    public function paymentCallbackFunction(Request $request){
        $transaction = PaytmWallet::with('receive');
        $response = $transaction->response();
        echo "<pre>";
        print_r($transaction);
        print_r($response);
    }
    public function indexHelp(){
        $faq = Faq::where('type','help')->get();
        $category = HelpFaqCategory::orderBy('id','DESC')->get();
        $categoryFirstData = HelpFaqCategory::orderBy('id','DESC')->first();
        return view('user.Dashboard.help',compact(['faq','category','categoryFirstData']));
    }
    public function indexEightTenCoun(){
        $faq = Faq::where('type','eight_ten')->get();
        $parentTestimonial = Testimonial::where('type','parent')->where('category','eight_ten')->get();
        return view('user.eight-ten-counselling',compact(['faq','parentTestimonial']));
    }
    public function indexTenTwelveCoun(){
        $faq = Faq::where('type','eleven_twelve')->get();
        $studentTestimonial = Testimonial::where('type','student')->where('category','eleven_twelve')->get();
        $parentTestimonial = Testimonial::where('type','parent')->where('category','eleven_twelve')->get();
        return view('user.ten-twelve-counselling',compact(['faq','studentTestimonial','parentTestimonial']));
    }
    public function indexCollegeGraduateCoun(){
        $faq = Faq::where('type','graduation')->get();
        //$parentTestimonial = Testimonial::where('type','parent')->where('category','graduation')->get();
        $studentTestimonial = Testimonial::where('type','student')->where('category','graduation')->get();
        $parentTestimonial = Testimonial::where('type','parent')->where('category','graduation')->get();
        // return view('user.college-graduate-counselling',compact(['faq','parentTestimonial']));
        return view('user.college-graduate-counselling',compact(['faq','studentTestimonial','parentTestimonial']));
    }
    public function indexPersonalityTestCoun(){
        $faq = Faq::where('type','personality')->get();
        return view('user.personality-test',compact(['faq']));
    }
    public function indexInterestTestCoun(){
        $faq = Faq::where('type','interest')->get();
        return view('user.interest-test',compact(['faq']));
    }
    public function indexIqTestCoun(){
        $faq = Faq::where('type','iq')->get();
        return view('user.iqtest',compact(['faq']));
    }
    public function indexAptitudeTestCoun(){
        $faq = Faq::where('type','aptitude')->get();
        return view('user.aptitude-test',compact(['faq']));
    }
    public function indexForgetPassword(){
        return view('user.forget-password');
    }
    public function forgetPasswordSubmitFun(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required'
        ]);

        if ($validator->fails()) {
        	Toastr::error('Email field are mandatory','error');
        	return back()->withInput();
        }

        $exits = User::where('email',$request->email)->where('role','user');
        if($exits->get()->count() == 0){
            Toastr::error('Email id does not exist','error');
        	return back()->withInput();
        }

        $exits = $exits->first();

        $uniqueCode = Helpers::uniqueCode(80);
        $uniqueCode2 = Helpers::uniqueCode(90);
        $Iddecode = base64_encode(base64_encode($exits->id));
        $linkGenerate = base64_encode($uniqueCode);
        $url = url('/password-set/'.$Iddecode.'/'.$linkGenerate.'/'.$uniqueCode2);

        $html = '';
        $html .= Helpers::forgotPasswordEmailContent($exits->name,$url);
        $subject = "Reset Your FUTURE LIFT Password";

        $mailSend = Helpers::phpMailerMailSend($request->email,$exits->name,$subject,$html);

        Toastr::success('We have e-mailed your password reset link','success');
        return back();
    }
    public function passwordSetFun($id,$link,$linkT){
       $idDecode = base64_decode(base64_decode($id));
       return view('user.password-set',compact(['idDecode']));
    }
    public function setResetPasswordFun(Request $request){
        $update = User::find($request->id);
        $update->password = Hash::make($request->password);
        $update->save();

        Toastr::success('Password reset successfully','success');
        return Redirect('/login-signup');
    }
    public function indexTermsCondition(){
        return view('user.terms-condition');
    }
    public function indexPolicy(){
        return view('user.policy');
    }
    public function indexAbout(){
        return view('user.about');
    }
    public function submitHelpFormFun(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'course_type' => 'required'
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error($value[0],'error');
        	}
        	return back()->withInput();
        }

        $helpForm = new HelpForm();
        $helpForm->name = $request->name;
        $helpForm->email = $request->email;
        $helpForm->phone_number = $request->phone_number;
        $helpForm->course_type = $request->course_type;
        $helpForm->comment = $request->comment;
        $helpForm->save();

        Toastr::success('Form submited successfully','success');
        return back();
    }
    public function submitQueryFormFun(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required'
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error($value[0],'error');
        	}
        	return back()->withInput();
        }

        $queryForm = new QueryForm();
        $queryForm->name = $request->name;
        $queryForm->email = $request->email;
        $queryForm->message = $request->message;
        $queryForm->save();

        Toastr::success('Form submited successfully','success');
        return back();
    }
    public function subscribeSubmitFun(Request $request){
        $validator = Validator::make($request->all(), [
            'subscribe_email' => 'required'
        ]);

        if ($validator->fails()) {
        	$allerror = Helpers::error_processor($validator);
        	foreach ($validator->errors()->getMessages() as $key => $value) {
        		Toastr::error($value[0],'error');
        	}
        	return back()->withInput();
        }

        $subsEmail = new SubscribeEmail();
        $subsEmail->email = $request->subscribe_email;
        $subsEmail->save();

        Toastr::success('Subscribe Email submited successfully','success');
        return back();
    }
    public function indexBlog(Request $request){
        $allBlog = Blog::orderBy('id', 'DESC')->paginate(8);
        $latestBlog = Blog::orderBy('id', 'DESC')->limit(3)->get();
        if ($request->ajax()) {
            $view = view('user.blog-load', compact('allBlog'))->render();
            return response()->json(['html'=>$view]);
        }

        $viewBlog = BlogView::select('blogId');
        if($viewBlog->get()->count() > 0){
            $populerBlog = Blog::orderBy('views', 'DESC')->limit(3)->get();
        }else{
            $populerBlog = [];
        }

        return view('user.blog',compact(['allBlog','latestBlog','populerBlog']));
    }
    public function indexBlogDetails($slug,Request $request){
        $blog = Blog::where('slug',$slug);
        if($blog->get()->count() > 0){
            $blog = $blog->first();
            $blogTag = BlogTag::where('blogId',$blog->id)->get();
            $latestBlog = Blog::orderBy('id', 'DESC')->limit(3)->get();
            $countLike = BlogLikeDislike::where('blogId',$blog->id)->where('is_like','1')->get()->count();
            $countDislike = BlogLikeDislike::where('blogId',$blog->id)->where('is_like','0')->get()->count();

            $cookie_name = (Str::replace('.','',($request->ip())).'-'. $blog->id);

            if(Cookie::get($cookie_name) == ''){
                $cookie =   Cookie::queue(Cookie::make($cookie_name, $blog->id , 60));
            }

            $viewB = BlogView::where('blogId',$blog->id)->where('ip',$request->ip())->where('cookie',$cookie_name);
            if($viewB->get()->count() == 0){
                $viewInsert = new BlogView();
                $viewInsert->blogId = $blog->id;
                $viewInsert->ip = $request->ip();
                $viewInsert->session_id = session()->getId();
                $viewInsert->cookie = $cookie_name;
                $viewInsert->save();

                $blogUpdate = Blog::find($blog->id);
                $blogUpdate->views = ($blog->views + 1);
                $blogUpdate->save();
            }

            return view('user.blog-details',compact(['blog','latestBlog','blogTag','countLike','countDislike']));
        }else{
            return view('user.404');
        }
    }
    public function indexBlogSearch(Request $request){
        if( $request->has('search') ) {
           $query = $request->query('search');
           $allBlog = Blog::where('title', 'LIKE', '%'.$query.'%')->orderBy('id', 'DESC')->paginate(10);
           $latestBlog = Blog::orderBy('id', 'DESC')->limit(3)->get();
           return view('user.blog-search',compact(['allBlog','latestBlog']));
        }else{
            return view('user.404');
        }
    }
    public function indexBlogTagSearch($slug){
        $blogTag = BlogTag::select('blogId')->where('slug',$slug);
        if($blogTag->get()->count()){
            $blogTag = $blogTag->pluck('blogId')->toArray();
            $allBlog = Blog::whereIn('id',$blogTag)->orderBy('id', 'DESC')->paginate(10);
            $latestBlog = Blog::orderBy('id', 'DESC')->limit(3)->get();
            return view('user.blog-tag-search',compact(['allBlog','latestBlog']));
        }else{
            return view('user.404');
        }
    }
    public function indexBlogCategorySearch($slug){
        $blogCategory = BlogCategory::where('slug',$slug);
        if($blogCategory->get()->count()){
            $blogCategory = $blogCategory->first();
            $allBlog = Blog::where('categoryId',$blogCategory->id)->orderBy('id', 'DESC')->paginate(10);
            $latestBlog = Blog::orderBy('id', 'DESC')->limit(3)->get();
            return view('user.blog-category-search',compact(['allBlog','latestBlog']));
        }else{
            return view('user.404');
        }
    }
    public function blogLikeFun($id){
        $flag = true;
        $notificationContent = 'Appreciation Alert! Thank You for Liking Our Blog Post! Your support means the world to us. We re glad you enjoyed our content. Stay tuned for more exciting updates coming your way soon!';
        $blogLike = BlogLikeDislike::where('blogId',$id)->where('userId',Auth::guard('user')->user()->id);
        if($blogLike->get()->count() > 0){
            $blogLike = $blogLike->first();
            $prev = $blogLike->is_like;
            BlogLikeDislike::where('blogId',$id)->where('userId',Auth::guard('user')->user()->id)->update([
                "is_like" => '1'
            ]);

            $blogData = BlogLikeDislike::where('blogId',$id)->where('userId',Auth::guard('user')->user()->id)->first();
            $next = $blogData->is_like;
            if($prev == $next){
                $flag = false;
            }

        }else{
            $like = new BlogLikeDislike();
            $like->blogId = $id;
            $like->userId = Auth::guard('user')->user()->id;
            $like->is_like = '1';
            $like->save();

        }

        if($flag){
            Helpers::addUserNotification(Auth::guard('user')->user()->id,'blog_like','Blog Like','blog',$notificationContent);
        }

        $countLike = BlogLikeDislike::where('blogId',$id)->where('is_like','1')->get()->count();
        $countDislike = BlogLikeDislike::where('blogId',$id)->where('is_like','0')->get()->count();

        return response()->json(['countLike'=>$countLike,'countDislike' => $countDislike]);

    }
    public function blogDislikeFun($id){
        $flag = true;
        $notificationContent = 'Acknowledging Your Feedback!  Thank You for Sharing Your Thoughts. We re sorry to hear that the recent blog post wasnt up to your expectations. We value your input and will work harder to bring you better content in the future. Your honesty helps us improve!';
        $blogLike = BlogLikeDislike::where('blogId',$id)->where('userId',Auth::guard('user')->user()->id);
        if($blogLike->get()->count() > 0){
            $blogLike = $blogLike->first();
            $prev = $blogLike->is_like;
            BlogLikeDislike::where('blogId',$id)->where('userId',Auth::guard('user')->user()->id)->update([
                "is_like" => '0'
            ]);
            $blogData = BlogLikeDislike::where('blogId',$id)->where('userId',Auth::guard('user')->user()->id)->first();
            $next = $blogData->is_like;
            if($prev == $next){
                $flag = false;
            }
        }else{
            $like = new BlogLikeDislike();
            $like->blogId = $id;
            $like->userId = Auth::guard('user')->user()->id;
            $like->is_like = '0';
            $like->save();
        }

        if($flag){
            Helpers::addUserNotification(Auth::guard('user')->user()->id,'blog_dislike','Blog Dislike','blog',$notificationContent);
        }

        $countLike = BlogLikeDislike::where('blogId',$id)->where('is_like','1')->get()->count();
        $countDislike = BlogLikeDislike::where('blogId',$id)->where('is_like','0')->get()->count();

        return response()->json(['countLike'=>$countLike,'countDislike' => $countDislike]);
    }
    public function indexUserNotification(){
        $notification = UserNotification::where('userId',Auth::guard('user')->user()->id)->orderBy('id','DESC')->get();
        return view('user.Dashboard.user-notification-list',compact(['notification']));
    }
    public function indextest(Request $request){
        $blogDetails = Blog::find(41);




         $html = '';
            $htmlT = '';
    	// $htmlT .= Helpers::mailHeader();
        // $htmlT .= Helpers::blogMailContent('Blog Title',asset('assets/images/blog-1.webp'),'https://www.facebook.com/Future-Lift-Education-PVT-LTD-112127913993548',Str::words(strip_tags('adasd'), 30, ' ...'));
        // $htmlT .= Helpers::mailFooter();


        $html .= Helpers::blogMailContent($blogDetails->title,asset('/assets/blog_images/'.$blogDetails->image),url('/blog-details/'.$blogDetails->slug),Str::words(strip_tags($blogDetails->content), 70, ' ...'));
        $subject = $blogDetails->title;
        $mailSend = Helpers::phpMailerMailSend('','Subscriber',$subject,$html);

        $htmlT .= Helpers::mailHeader();
        $htmlT .= Helpers::blogMailContent($blogDetails->title,asset('/assets/blog_images/'.$blogDetails->image),url('/blog-details/'.$blogDetails->slug),Str::words(strip_tags($blogDetails->content), 70, ' ...'));
        $htmlT .= Helpers::mailFooter();


        echo $htmlT;
    }
    public function careerLibraryIndex(){
        $category = CareerLibraryCategory::get();
        return view('user.career-library',compact(['category']));
    }
    public function careerLibraryDetailsIndex($slug){
        $data = CareerLibraryDetails::where('slug',$slug)->first();
        return view('user.career-library-details',compact(['data']));
    }
    public function InstantAdviceIndex(){
        $faq = Faq::where('type','instant_advice')->get();
        $studentTestimonial = Testimonial::where('type','student')->where('category','instant_advice')->get();
        $parentTestimonial = Testimonial::where('type','parent')->where('category','instant_advice')->get();
        return view('user.instant-advice',compact(['faq','studentTestimonial','parentTestimonial']));
    }
    public function getLibraryData($key,$categoryId){
        if($categoryId != 0){
        $list = Helpers::getCategoryWiseLibraryList($categoryId);
        ?>
            <div class="tab-pane fade show active" id="tab-key-<?=$key?>" role="tabpanel" aria-labelledby="tab-key-<?=$key?>">
                <div class="feature_box">
        <?php
        if($list){
            foreach ($list as $key => $value){
                ?>
                    <a href="<?=url('/career-library-details/'.$value->slug)?>">
                        <div class="feature_boxDetails">
                            <div class="img_box">
                                <img src="<?=asset('assets/career_library/'.$value->thumbnail)?>" alt=""class="img-fluid">
                            </div>
                            <div class="textBoxHeading">
                                <h5><?=$value->title?></h5>
                            </div>
                        </div>
                    </a>
                <?php
            }
        }
        ?>
                </div>
            </div>
        <?php
        }else{
            $list = CareerLibraryDetails::get();
            ?>
            <div class="tab-pane fade show active" id="tab-key-<?=$key?>" role="tabpanel" aria-labelledby="tab-key-<?=$key?>">
                <div class="feature_box">
        <?php
        if($list){
            foreach ($list as $key => $value){
                ?>
                    <a href="<?=url('/career-library-details/'.$value->slug)?>">
                        <div class="feature_boxDetails">
                            <div class="img_box">
                                <img src="<?=asset('assets/career_library/'.$value->thumbnail)?>" alt=""class="img-fluid">
                            </div>
                            <div class="textBoxHeading">
                                <h5><?=$value->title?></h5>
                            </div>
                        </div>
                    </a>
                <?php
            }
        }
        ?>
                </div>
            </div>
        <?php
        }
    }
    public function careerLibraryPostLike(Request $request){
        $insert = new CareerLibraryVote();
        $insert->post_id = $request->id;
        $insert->is_like = '1';
        $insert->ip_address = $request->ip();
        $insert->save();
        Toastr::success('Thank you for submitting your feedback','success');
        return back();
    }
    public function careerLibraryPostDisLike(Request $request){
        $insert = new CareerLibraryVote();
        $insert->post_id = $request->postId;
        $insert->is_dislike = '1';
        $insert->ip_address = $request->ip();
        $insert->comment = $request->vote_comment;
        $insert->save();
        Toastr::success('Thank you for submitting your feedback','success');
        return back();
    }
    public function indexCareerLibrarySearch(Request $request){
        if( $request->has('search') ) {
            $query = $request->query('search');
            $allLibrary = CareerLibraryDetails::where('title', 'LIKE', '%'.$query.'%')->orderBy('id', 'DESC')->paginate(10);
            return view('user.career-library-search',compact(['allLibrary']));
         }else{
             return view('user.404');
         }
    }
    public function getHelpFaqData($key,$categoryId){
        $faq = Faq::where('type','help')->where('help_faq_categoryId',$categoryId)->get();
        if(count($faq) > 0){
            ?>
                <div class="tab-pane fade show active faqTab" id="v-pills-<?=$key?>" role="tabpanel" aria-labelledby="v-pills-<?=$key?>">
                                        <!-- Collapse button -->
                    <div class="accordion accordion-flush" id="accordionFlushExample2">
                        <?php
                            foreach ($faq as $faqkey => $value) {
                        ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading<?=$faqkey?>">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?=$faqkey?>" aria-expanded="false" aria-controls="flush-collapse<?=$faqkey?>">
                                <?=$value->question?>
                            </button>
                            </h2>
                            <div id="flush-collapse<?=$faqkey?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?=$faqkey?>" data-bs-parent="#accordionFlushExample2">
                                <div class="accordion-body"><?=$value->answer?></div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            <?php
        }else{
            ?>
                <div class="tab-pane fade show active faqTab" id="v-pills-<?=$key?>" role="tabpanel" aria-labelledby="v-pills-<?=$key?>">
                    No Data Found
                </div>
            <?php
        }
    }
    public function instantBookIndex(Request $request){
        $id = base64_decode($request->query('product'));
        $data = Futurelit_session::find($id);
        if($data){
            return view('user.instant-book',compact(['data']));
        }else{
            $data = [];
            return view('user.instant-book',compact(['data']));
        }
    }
    public function indexuserreview(){
        return view('user.Dashboard.user-review');
    }
}

