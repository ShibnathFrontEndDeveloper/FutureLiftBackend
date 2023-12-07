<?php
namespace App;
/**
 *
 */
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Futurelit_session;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Models\MailLogs;
use App\Models\CounsellingPrice;
use App\Models\UserSubscriptionModel;
use App\Models\SessionHistory;
use App\Models\UserRole;
use App\Models\Role;
use App\Models\MenuAccess;
use App\Models\Menu;
use App\Models\BlogCategory;
use App\Models\UserNotification;
use App\Models\User_information;
use App\Models\CareerLibraryDetails;

class Helpers
{

	public static function error_processor($validator)
    {
        $err_keeper = [];
        foreach ($validator->errors()->getMessages() as $index => $error) {
            array_push($err_keeper, ['code' => $index, 'message' => $error[0]]);
        }
        return $err_keeper;
    }
    public static function mailHeader(){
    	$html = '';
    	$html .= '<table width="100%">';
    	$html .= 	'<tr>';
    	$html .= 		'<td style="padding: 55px;text-align:center"><img style="width:158px;" src="'.asset('/assets/images/new_blak_logo.png').'"></td>';
    	$html .= 	'</tr>';
    	$html .= '</table>';
        $html .= '<table width="100%">';
        $html .= 	'<tr>';
        $html .= 		'<td>';

    	return $html;
    }
    public static function mailFooter(){
    	$html = '';
    	$html .= 		'</td>';
        $html .= 	'</tr>';
        $html .= '</table>';
    	$html .= 	'<table  style="width:100%;">';
    	$html .= 		'<tr>';
    	$html .= 			'<td style="float:left;"><p>Thank you for choosing FUTURE LIFT for your career counseling needs. We are here to assist you on your journey to success, and we are committed to ensuring your account security</p></td>';
    	$html .= 		'</tr>';
    	$html .= 		'<tr>';
    	$html .= 			'<td style="float:left;"><p>Warm regards,</p>';
        $html .= 		        '<p>Mr. Rahul Dubey</p>';
        $html .= 		        '<p>Founder, Future Lift</p>';
        $html .= 		    '</td>';
    	$html .= 		'</tr>';
        $html .= 	'</table>';
        $html .= 	'<table  style="width:100%;">';
    	$html .= 		'<tr>';
    	$html .= 			'<td style="text-align:center;"><h3><b>Follow us yet?</b></h3></td>';
    	$html .= 		'</tr>';
    	$html .= 		'<tr>';
    	$html .= 			'<td style="text-align:center;padding-top: 20px;">';
        $html .= 		        '<a href="https://www.facebook.com/Future-Lift-Education-PVT-LTD-112127913993548/"><img style="width:32px;padding-right: 20px;" src="'.asset('assets/images/facebook.png').'"></a>';
        $html .= 		        '<a href="https://www.instagram.com/invites/contact/?i=2nxyq2sxhhyi&utm_content=7k4l34c"><img style="width:32px;padding-right: 20px;" src="'.asset('assets/images/insta.png').'"></a>';
        $html .= 		        '<a href="https://twitter.com/Futurelift_edu?s=09"><img style="width:32px;padding-right: 20px;" src="'.asset('assets/images/tweeter.png').'"></a>';
        $html .= 		        '<a href="https://youtube.com/channel/UCvY_1Aon-HqSHzqWwvIU2zQ"><img style="width:32px;padding-right: 20px;" src="'.asset('assets/images/youtube.png').'"></a>';
        $html .= 		        '<a href="https://www.linkedin.com/company/futurelift-duication"><img style="width:32px;padding-right: 20px;" src="'.asset('assets/images/linkedin.png').'"></a>';
        $html .= 		    '</td>';
    	$html .= 		'</tr>';
    	$html .= 	'</table>';

    	return $html;
    }

    public static function split_name($name) {
        $name = trim($name);
        $last_name = (strpos($name, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $name);
        $first_name = trim( preg_replace('#'.preg_quote($last_name,'#').'#', '', $name ) );
        return array($first_name, $last_name);
    }

    public static function imageCheck(){
        $image = Auth::guard('user')->user()->profile_image;
        if($image){
            return asset('assets/user_images/'.$image);
        }else{
            $img = asset('assets/images/no-user.png');
            return $img;
        }
    }

    public static function getFirstname(){
        $name = Helpers::split_name(Auth::guard('user')->user()->name);
        $fname = $name[0];
        return $fname;
    }
    public static function getSessionPrice($id){
        $data = Futurelit_session::find($id);
        $price = $data->price;
        return $price;
    }

    public static function getSessionData($id){
        $data = Futurelit_session::find($id);
        return $data;
    }
    public static function uniqueCode($limit){
        return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
    }

    public static function getUserDetails($id){
       $data =  User::find($id);
       return $data;
    }
    public static function getCounsellingData($id){
        $data = CounsellingPrice::find($id);
        return $data;
    }
    public static function getEmailConfig(){
        $array = [
            "smtp"=>"tls",
            "host"=>"smtp.gmail.com",
            "username"=>"rajdeeproychowdhuryb@gmail.com",
            "mailform"=>"rajdeeproychowdhuryb@gmail.com",
            "password"=>"uxrijlygawdnwecr",
            "port"=>587,
            "fromname"=>"FutureLift"
        ];
        return json_encode($array);
    }
    public static function phpMailerMailSend($toMail , $toName , $subject , $body) {
        $mailConfig = json_decode(Helpers::getEmailConfig());

        $html = Helpers::mailHeader();
        $html .= $body;
        $html .= Helpers::mailFooter();


    	require '../vendor/autoload.php';
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPKeepAlive = true;
        $mail->Mailer = "smtp";
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = $mailConfig->smtp;
        $mail->Host = $mailConfig->host;
        $mail->Username = $mailConfig->username;
        $mail->Password = $mailConfig->password;
        $mail->Port = $mailConfig->port;
        $mail->setFrom($mailConfig->mailform, $mailConfig->fromname);
        $mail->addAddress($toMail, $toName);
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $html;

        if($mail->send()){
            $status = "success";
        }else{
            $status = "failed";
        }

        $mailData = new MailLogs();
        $mailData->toEmail = $toMail;
        $mailData->fromEmail = $mailConfig->mailform;
        $mailData->subject = $subject;
        $mailData->body = base64_encode($html);
        $mailData->status = $status;
        $mailData->save();
    }
    public static function getCurrentPackage(){
        $userSubscription = UserSubscriptionModel::where('userId',Auth::guard('user')->user()->id)->where('status','active')->first();
        if($userSubscription){
            $sessionData = CounsellingPrice::find($userSubscription->package_id);
            $packageName = $sessionData->plan_name;
        }else{
            $packageName = "";
        }

        return $packageName;
    }
    public static function getCurrentPackagePrice(){
        $userSubscription = UserSubscriptionModel::where('userId',Auth::guard('user')->user()->id)->where('status','active')->first();
        if($userSubscription){
            $sessionData = CounsellingPrice::find($userSubscription->package_id);
            $packagePrice = (float)$sessionData->plan_price;
        }else{
            $packagePrice = 0;
        }

        return $packagePrice;
    }
    public static function userIdWiseMenu($id){
        $userRole = UserRole::where('userId',$id);
        $menus = [];
        if($userRole->get()->count() > 0){
            $userRole = $userRole->first();
            $menuAccess = MenuAccess::where('roleId',$userRole->roleId);
            if($menuAccess->get()->count() > 0){
                $menuAccess = $menuAccess->first();
                $explodeIds = explode(',',$menuAccess->menuId);
                if(count($explodeIds) > 0){
                    $menus = Menu::whereIn('id',$explodeIds)->orderBy('position','ASC')->get();
                }
            }
        }

        return $menus;
    }
    public static function userIdWiseRoleName($id){
        $userRole = UserRole::where('userId',$id);
        $name = "";
        if($userRole->get()->count() > 0){
            $userRole = $userRole->first();
            $role = Role::find($userRole->roleId);
            $name = $role->name;
        }

        return $name;
    }
    public static function roleWiseRouteChecking($routeName){
        ////// role wise menu id checking
        switch ($routeName) {
            case 'userlistedit':
                $flag = false;
                $check = Helpers::accessHasCheck([2]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'booksessionAddEdit':
                $flag = false;
                $check = Helpers::accessHasCheck([3]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'counsellingSession':
                $flag = false;
                $check = Helpers::accessHasCheck([4]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'userDetails':
                $flag = false;
                $check = Helpers::accessHasCheck([2]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'faqAddList':
                $flag = false;
                $check = Helpers::accessHasCheck([5]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'faqEdit':
                $flag = false;
                $check = Helpers::accessHasCheck([5]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'faqDelete':
                $flag = false;
                $check = Helpers::accessHasCheck([5]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'testimonialAddList':
                $flag = false;
                $check = Helpers::accessHasCheck([6]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'testimonialEdit':
                $flag = false;
                $check = Helpers::accessHasCheck([6]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'testimonialDelete':
                $flag = false;
                $check = Helpers::accessHasCheck([6]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'subscriptionPackageAddList':
                $flag = false;
                $check = Helpers::accessHasCheck([7]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'subscriptionPackageEdit':
                $flag = false;
                $check = Helpers::accessHasCheck([7]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'roleAddList':
                $flag = false;
                $check = Helpers::accessHasCheck([8]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'roleEdit':
                $flag = false;
                $check = Helpers::accessHasCheck([8]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'roleMenuAccess':
                $flag = false;
                $check = Helpers::accessHasCheck([8]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'userEdit':
                $flag = false;
                $check = Helpers::accessHasCheck([2]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'siteForms':
                $flag = false;
                $check = Helpers::accessHasCheck([9,10]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'subscribeEmail':
                $flag = false;
                $check = Helpers::accessHasCheck([11]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'blogCategory':
                $flag = false;
                $check = Helpers::accessHasCheck([12]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'blogCategoryAdd':
                $flag = false;
                $check = Helpers::accessHasCheck([12]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'blogCategoryEdit':
                $flag = false;
                $check = Helpers::accessHasCheck([12]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'blogCategoryDelete':
                $flag = false;
                $check = Helpers::accessHasCheck([12]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'blogSection':
                $flag = false;
                $check = Helpers::accessHasCheck([13]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'blogSectionAdd':
                $flag = false;
                $check = Helpers::accessHasCheck([13]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'blogSectionEdit':
                $flag = false;
                $check = Helpers::accessHasCheck([13]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'blogSectionDelete':
                $flag = false;
                $check = Helpers::accessHasCheck([13]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'careerLibraryCategoryAddList':
                $flag = false;
                $check = Helpers::accessHasCheck([14]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'careerLibraryCategoryEdit':
                $flag = false;
                $check = Helpers::accessHasCheck([14]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'careerLibraryCategoryAdd':
                $flag = false;
                $check = Helpers::accessHasCheck([14]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'CareerLibraryCategoryDelete':
                $flag = false;
                $check = Helpers::accessHasCheck([14]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'careerLibraryAddList':
                $flag = false;
                $check = Helpers::accessHasCheck([15]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'careerLibraryEdit':
                $flag = false;
                $check = Helpers::accessHasCheck([15]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'CareerLibraryDelete':
                $flag = false;
                $check = Helpers::accessHasCheck([15]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;

            default:
                # code...
                break;
        }
    }

    public static function accessHasCheck($menuIds){
        $flag = false;
        $userRole = UserRole::where('userId',Auth::guard('admin')->user()->id);
        if($userRole->get()->count() > 0){
            $userRole = $userRole->first();
            $menuAccess = MenuAccess::where('roleId',$userRole->roleId);
            if($menuAccess->get()->count() > 0){
                $menuAccess = $menuAccess->first();
                $explodeIds = explode(',',$menuAccess->menuId);
                foreach ($menuIds as $key => $value) {
                    if(in_array($value,$explodeIds)){
                        $flag = true;
                    }
                }
            }
        }
        return $flag;
    }
    public static function getBlogCategoryIdByName($id){
        $data = BlogCategory::find($id);
        return $data->name;
    }
    public static function getBlogCategoryIdBySlug($id){
        $data = BlogCategory::find($id);
        return $data->slug;
    }
    public static function readMoreHelper($story_desc, $chars = 100,$modalId) {
        // $story_desc = substr($story_desc,0,$chars);
        // $story_desc = substr($story_desc,0,strrpos($story_desc,' '));
        //$story_desc = $story_desc." <a href='#".$modalId."'>Read More...</a>";
        $story_desc = substr($story_desc, 0, $chars)." <a href='javascript:void(0)' onclick='openModal(`".$modalId."`)' id='readmore".$modalId."'>Read More...</a>";
        return $story_desc;
    }
    public static function addUserNotification($userId = 0,$section,$title,$type,$content,$url = "") {
        $flag = false;
        $notification = new UserNotification();
        if($userId != 0){
            $notification->userId = $userId;
        }
        $notification->section = $section;
        $notification->title = $title;
        $notification->type = $type;
        $notification->content = $content;
        $notification->url = $url;
        $notification->save();
        if($notification){
            $flag = true;
        }
        return $flag = true;
    }
    public static function notificationTypeWiseIcon($type) {
        switch ($type) {
            case 'subscription':
                return '<i class="mdi mdi-approval"></i>';
                break;
            case 'session':
                return '<i class="mdi mdi-account-check"></i>';
                break;
            case 'refer':
                return '<i class="mdi mdi-account-multiple"></i>';
                break;
            case 'profile':
                return '<i class="mdi mdi-account-settings-variant"></i>';
                break;
            case 'blog':
                return '<i class="mdi mdi-blogger"></i>';
                break;
            case 'career_session_booked':
                return '<i class="mdi mdi-calendar-clock"></i>';
                break;
            case 'career_session_complete':
                return '<i class="mdi mdi-checkbox-marked-circle"></i>';
                break;
            case 'registration':
                return '<i class="mdi mdi-human-greeting"></i>';
                break;

            default:
                # code...
                break;
        }
    }
    public static function getUserNotificationList($userId) {
        $notification = UserNotification::where('userId',$userId)->orderBy('id','DESC')->limit(3)->get();
        return $notification;
    }
    public static function profileCompletePercentage(){
        $dataCount = User_information::where('userId',Auth::guard('user')->user()->id)->get()->count();
        $totalField = 19;
        $percentage = 0;
        $completed = 0;
        $personal = 0;
        $education = 0;
        $family = 0;
        $academic = 0;
        if($dataCount > 0){
            $data = User_information::where('userId',Auth::guard('user')->user()->id)->first();
            // if($data->father_name){
            //     $completed = $completed + 1;
            //     $personal = $personal + 1;
            // }
            // if($data->mother_name){
            //     $completed = $completed + 1;
            //     $personal = $personal + 1;
            // }
            if($data->profile_image){
                $completed = $completed + 1;
                $personal = $personal + 1;
            }
            if($data->dob){
                $completed = $completed + 1;
                $personal = $personal + 1;
            }
            // if($data->city){
            //     $completed = $completed + 1;
            //     $personal = $personal + 1;
            // }
            if($data->gender){
                $completed = $completed + 1;
                $personal = $personal + 1;
            }
            if($data->college){
                $completed = $completed + 1;
                $education = $education + 1;
            }
            if($data->university){
                $completed = $completed + 1;
                $education = $education + 1;
            }
            if($data->course){
                $completed = $completed + 1;
                $education = $education + 1;
            }
            if($data->year_of_passing){
                $completed = $completed + 1;
                $education = $education + 1;
            }
            if($data->father_guardian_name){
                $completed = $completed + 1;
                $family = $family + 1;
            }
            if($data->mother_guardian_name){
                $completed = $completed + 1;
                $family = $family + 1;
            }
            if($data->father_profession){
                $completed = $completed + 1;
                $family = $family + 1;
            }
            if($data->mother_profession){
                $completed = $completed + 1;
                $family = $family + 1;
            }
            if(!$data->recent_marksheet){
                if($data->recent_subject){
                    if(Helpers::nullCheckingProfileField($data->recent_subject)){
                        $completed = $completed + 1;
                        $academic = $academic + 5;
                    }
                }
                if($data->recent_score){
                    if(Helpers::nullCheckingProfileField($data->recent_score)){
                        $completed = $completed + 1;
                        $academic = $academic + 5;
                    }
                }
            }
            if(!$data->previous_marksheet){
                if($data->previous_subject){
                    if(Helpers::nullCheckingProfileField($data->previous_subject)){
                        $completed = $completed + 1;
                        $academic = $academic + 5;
                    }
                }
                if($data->previous_score){
                    if(Helpers::nullCheckingProfileField($data->previous_score)){
                        $completed = $completed + 1;
                        $academic = $academic + 5;
                    }
                }
            }
            if($data->recent_marksheet){
                $completed = $completed + 1;
                $academic = $academic + 1;
            }
            if($data->previous_marksheet){
                $completed = $completed + 1;
                $academic = $academic + 1;
            }
        }
        $user = User::find(Auth::guard('user')->user()->id);
        if($user->name){
            $completed = $completed + 1;
            $personal = $personal + 1;
        }

        ///// each tab 25%

        if($personal == 4){
            $percentage = $percentage + 25;
        }
        if($education == 4){
            $percentage = $percentage + 25;
        }
        if($family == 4){
            $percentage = $percentage + 25;
        }
        if($academic == 20 || $academic == 2 || $academic == 11){
            $percentage = $percentage + 25;
        }


        //$percentage = ($completed / $totalField) * 100;

        $setData = [
            "percentage" => $percentage,
            "completed" => $completed,
            "totalField" => $totalField
        ];

        return $setData;
    }
    public static function nullCheckingProfileField($fieldData){
        $field = false;
        foreach(json_decode($fieldData,true) as $key => $value){
            if($value!=null){
                $field = true;
                break;
            }
        }
        return $field;
    }
    public static function welcomeEmailContent($name){
        $html = '';
        $html .= '<p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><strong>Dear '.$name.',</strong></span></span></p>

        <p>&nbsp;</p>

        <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif">We are thrilled to welcome you to Future Lift, your trusted partner on your journey towards a successful and fulfilling career. We understand that choosing the right path can be a significant step, and we are here to guide and support you every step of the way.</span></span></p>

        <p>&nbsp;</p>

        <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif">At Future Lift, we believe that each student is unique, with their own aspirations, strengths, and dreams. Our mission is to empower you to make informed decisions about your future, discover your passions, and chart a course that leads to success and happiness.</span></span></p>

        <p>&nbsp;</p>

        <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><strong><span dir="ltr" lang="EN" style="color:#c00000">Here&#39;s what you can expect from us:</span></strong></span></span></p>

        <p>&nbsp;</p>

        <ul style="list-style-type:circle">
            <li><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><strong>Expert Guidance:</strong> Our team of experienced career counselors and advisors are here to provide you with personalized guidance tailored to your goals. Whether you&#39;re exploring career options, seeking internship opportunities, or planning for further education, we have you covered.</span></span></li>
        </ul>

        <p>&nbsp;</p>

        <ul style="list-style-type:circle">
            <li><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><strong>Comprehensive Resources:</strong> Access a wealth of resources, including articles, webinars, and assessments designed to help you gain insights into various career paths and industries.</span></span></li>
        </ul>

        <p>&nbsp;</p>

        <ul style="list-style-type:circle">
            <li><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><strong>Career Development Workshops:</strong> Join our interactive workshops and seminars to enhance your skills, from resume building and interview preparation to networking strategies.</span></span></li>
        </ul>

        <p>&nbsp;</p>

        <ul style="list-style-type:circle">
            <li><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><strong>Job and Internship Opportunities:</strong> Stay informed about the latest job and internship openings in your field through our job board and exclusive partnerships with leading companies.</span></span></li>
        </ul>

        <p>&nbsp;</p>

        <p>&nbsp;</p>

        <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif">Once again, welcome to Future Lift. Together, we will make your dreams a reality!</span></span></p>
        ';

        return $html;
    }
    public static function forgotPasswordEmailContent($name,$link){
        $html = '';
        $html .= '<p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span dir="ltr" lang="EN" style="font-family:&quot;Calibri&quot;,sans-serif">Dear '.$name.',</span></span></span></p>

        <p>&nbsp;</p>

        <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span dir="ltr" lang="EN" style="font-family:&quot;Calibri&quot;,sans-serif">We hope this message finds you well. It appears that you&#39;ve forgotten your password for your FUTURE LIFT account. Not to worry, we&#39;re here to help you regain access to your account.</span></span></span></p>

        <p>&nbsp;</p>

        <p style="text-align:center"><a href="'.$link.'"><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><strong><span dir="ltr" lang="EN" style="font-size:14.0pt"><span style="background-color:darkblue"><span style="font-family:&quot;Calibri&quot;,sans-serif"><span style="color:white">Reset Password</span></span></span></span></strong></span></span></a></p>

        <p style="text-align:center">&nbsp;</p>

        <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span dir="ltr" lang="EN" style="font-family:&quot;Calibri&quot;,sans-serif">* Must be at least 8 characters long.</span></span></span></p>

        <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span dir="ltr" lang="EN" style="font-family:&quot;Calibri&quot;,sans-serif">* Should include a mix of upper and lower-case letters.</span></span></span></p>

        <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span dir="ltr" lang="EN" style="font-family:&quot;Calibri&quot;,sans-serif">* Should contain at least one number and one special character (e.g., !, @, #, $, etc.).</span></span></span></p>

        <p>&nbsp;</p>

        <p><span dir="ltr" lang="EN" style="font-size:11.0pt"><span style="font-family:&quot;Calibri&quot;,sans-serif">If you did not initiate this password reset or believe this request was made in error, please contact our support team immediately at myfuturelift@gmail.com or +91 8617373674 for further assistance.</span></span></p>
        ';

        return $html;
    }
    public static function referMailContent($name,$link){
        $html = '';
        $html .= '<p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span dir="ltr" lang="EN" style="font-family:&quot;Calibri&quot;,sans-serif">Hey '.$name.',</span></span></span></p>

        <p>&nbsp;</p>

        <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span dir="ltr" lang="EN" style="font-family:&quot;Calibri&quot;,sans-serif">I&#39;ve been using FUTURE LIFT, a fantastic career counseling platform that offers a wide range of resources, guidance, and support to help you navigate your career path effectively. Whether you&#39;re a student looking for internships, a recent graduate seeking job opportunity, or simply someone who wants to explore various career options, FUTURE LIFT has got you covered.</span></span></span></p>

        <p>&nbsp;</p>

        <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><strong><span dir="ltr" lang="EN" style="font-family:&quot;Calibri&quot;,sans-serif">Here&#39;s why I think you should check it out:</span></strong></span></span></p>

        <p>&nbsp;</p>

        <ul style="list-style-type:circle">
            <li><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><strong><span dir="ltr" lang="EN" style="font-family:&quot;Calibri&quot;,sans-serif">Personalized Career Guidance:</span></strong><span dir="ltr" lang="EN" style="font-family:&quot;Calibri&quot;,sans-serif"> FUTURE LIFT offers personalized career counseling sessions with experienced advisors who can help you define and achieve your career goals.</span></span></span></li>
            <li><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><strong><span dir="ltr" lang="EN" style="font-family:&quot;Calibri&quot;,sans-serif">Rich Resource Library:</span></strong><span dir="ltr" lang="EN" style="font-family:&quot;Calibri&quot;,sans-serif"> You&#39;ll find a treasure trove of articles, webinars, and assessments that provide insights into different industries, job search strategies, and skill development.</span></span></span></li>
            <li><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><strong><span dir="ltr" lang="EN" style="font-family:&quot;Calibri&quot;,sans-serif">Job and Internship Opportunities</span></strong><span dir="ltr" lang="EN" style="font-family:&quot;Calibri&quot;,sans-serif">: The platform regularly updates job listings and internship opportunities, making it easier for you to find and apply for positions in your field of interest.</span></span></span></li>
        </ul>

        <p>&nbsp;</p>

        <p style="text-align:center">&nbsp;</p>

        <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span dir="ltr" lang="EN" style="font-family:&quot;Calibri&quot;,sans-serif">The best part? If you sign up through my referral link, you&#39;ll receive a special welcome offer! Here&#39;s the link to get started: <strong><em><a href="'.$link.'">'.$link.' </a></em></strong><span style="background-color:darkblue"><span style="color:white"><a href="'.$link.'" style="color:white">Click Here</a></span></span></span></span></span></p>

        <p>&nbsp;</p>

        <p>&nbsp;</p>

        <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span dir="ltr" lang="EN" style="font-family:&quot;Calibri&quot;,sans-serif">I&#39;ve already benefited a lot from using FUTURE LIFT, and I believe you will too. Feel free to reach out if you have any questions or if you&#39;d like to chat about how FUTURE LIFT can help you achieve your career aspirations.</span></span></span></p>

        <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span dir="ltr" lang="EN" style="font-family:&quot;Calibri&quot;,sans-serif">Looking forward to seeing you thrive in your career journey!</span></span></span></p>
        ';

        return $html;
    }
    public static function blogMailContent($title,$image,$link,$content){
        $html = '';
        $html .= '<p>&nbsp;</p>

        <p style="text-align:center"><a href="'.$link.'"><span style="font-size:14pt;font-weight:900;"><span style="font-family:Arial,sans-serif"><span style="background-color:yellow">'.$title.'</span></span></span></a></p>

        <p style="text-align:center">&nbsp;</p>

        <p style="text-align:center">
            <a href="'.$link.'"><img style="width:300px;border-radius:10px;" src="'.$image.'"></a>
        </p>
        <div>
            <p style="text-align:center;font-size:19px;">
                '.$content.'
            </p>
        </div>
        <p style="text-align:center"><a href="'.url('/blog').'"><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><strong><span style="background-color:darkblue;padding:8px;margin-top:20px;"><span style="color:white">Read More Blogs</span></span></strong></span></span></a></p>

        <p>&nbsp;</p>

        <p><span dir="ltr" lang="EN" style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">At FUTURE LIFT, we&#39;re here to support you every step of the way. Explore our platform for a wealth of resources, career counseling sessions, and job opportunities tailored to your interests.</span></span></p>
        ';

        return $html;
    }
    public static function anyArrayFieldNullChecking($array){
        $flag = false;
        foreach ($array as $key => $value) {
            if($value == ''){
                $flag = true;
                break;
            }
        }
        return $flag;
    }
    public static function getCategoryWiseLibraryList($categoryId){
       return $list = CareerLibraryDetails::where('category',$categoryId)->get();
    }

}
?>
