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
use App\Models\CareerLibraryVote;
use App\Models\CouncelorHoliday;
use Illuminate\Support\Facades\Request;
use DateTime;
use DateInterval;
use App\Models\UserSessionReview;
use App\Models\LanguageModel;
use App\Mail\DynamicTemplateMail;
use Illuminate\Support\Facades\Mail;

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
    // public static function mailHeader_backup(){
    // 	$html = '';
    // 	$html .= '<table width="100%">';
    // 	$html .= 	'<tr>';
    // 	$html .= 		'<td style="padding: 55px;text-align:center"><img style="width:158px;" src="'.asset('/assets/images/new_blak_logo.png').'"></td>';
    // 	$html .= 	'</tr>';
    // 	$html .= '</table>';
    //     $html .= '<table width="100%">';
    //     $html .= 	'<tr>';
    //     $html .= 		'<td>';

    // 	return $html;
    // }
    public static function mailHeader(){
    	$html = '';
    	// $html .= '<div style="display: flex; justify-content:center; align-items:center;flex-direction:column;">
        // <div style="width: 100%; display:flex; justify-content:center; align-items:center; max-width:950px; border:1px solid #c5c5c5; border-radius:5px; flex-direction:column;">
        //     <nav style="display:flex; justify-content:space-between; width:100%;">
        //         <div style="margin-left: 20px;"><img src="'.asset('assets/images/logo1.png').'" alt="" style="width:150px;"></div>
        //         <div style="display: flex; align-items:center; margin-right:20px;"><a href="'.url('/login-signup').'" style="text-decoration: none; background:#5426fa; color:#fff; padding:8px 20px; border-radius:5px; font-size:16px;">Login</a></div>
        //     </nav>';



        $html .= '<table style="width: 100%; border:1px solid #9e9e9e59">
            <tr>
                <td><div style="margin-left: 20px;"><img src="'.asset('assets/images/logo1.png').'" alt="" style="width:150px;"></div></td>
                <td><div style=" text-align:right; margin-right:20px;"><a href="'.url('/login-signup').'" style="text-decoration: none; background:#5426fa; color:#fff; padding:8px 20px; border-radius:5px; font-size:16px;">Login</a></div></td>
            </tr>';




    	return $html;
    }
    // public static function mailFooter_backup(){
    // 	$html = '';
    // 	$html .= 		'</td>';
    //     $html .= 	'</tr>';
    //     $html .= '</table>';
    // 	$html .= 	'<table  style="width:100%;">';
    // 	$html .= 		'<tr>';
    // 	$html .= 			'<td style="float:left;"><p>Thank you for choosing FUTURE LIFT for your career counseling needs. We are here to assist you on your journey to success, and we are committed to ensuring your account security</p></td>';
    // 	$html .= 		'</tr>';
    // 	$html .= 		'<tr>';
    // 	$html .= 			'<td style="float:left;"><p>Warm regards,</p>';
    //     $html .= 		        '<p>Mr. Rahul Dubey</p>';
    //     $html .= 		        '<p>Founder, Future Lift</p>';
    //     $html .= 		    '</td>';
    // 	$html .= 		'</tr>';
    //     $html .= 	'</table>';
    //     $html .= 	'<table  style="width:100%;">';
    // 	$html .= 		'<tr>';
    // 	$html .= 			'<td style="text-align:center;"><h3><b>Follow us yet?</b></h3></td>';
    // 	$html .= 		'</tr>';
    // 	$html .= 		'<tr>';
    // 	$html .= 			'<td style="text-align:center;padding-top: 20px;">';
    //     $html .= 		        '<a href="https://www.facebook.com/Future-Lift-Education-PVT-LTD-112127913993548/"><img style="width:32px;padding-right: 20px;" src="'.asset('assets/images/facebook.png').'"></a>';
    //     $html .= 		        '<a href="https://www.instagram.com/invites/contact/?i=2nxyq2sxhhyi&utm_content=7k4l34c"><img style="width:32px;padding-right: 20px;" src="'.asset('assets/images/insta.png').'"></a>';
    //     $html .= 		        '<a href="https://twitter.com/Futurelift_edu?s=09"><img style="width:32px;padding-right: 20px;" src="'.asset('assets/images/tweeter.png').'"></a>';
    //     $html .= 		        '<a href="https://youtube.com/channel/UCvY_1Aon-HqSHzqWwvIU2zQ"><img style="width:32px;padding-right: 20px;" src="'.asset('assets/images/youtube.png').'"></a>';
    //     $html .= 		        '<a href="https://www.linkedin.com/company/futurelift-duication"><img style="width:32px;padding-right: 20px;" src="'.asset('assets/images/linkedin.png').'"></a>';
    //     $html .= 		    '</td>';
    // 	$html .= 		'</tr>';
    // 	$html .= 	'</table>';

    // 	return $html;
    // }
    public static function mailFooter(){
    	$html = '';
    	// $html .= '<div style="padding:10px 60px; display:flex; justify-content:center; align-items:center;flex-direction:column;">
        //         <h1 style="text-align: center;">FAQ?</h1>
        //         <p style="font-size: 20px;">Your Quick Guide to Navigate the Future Lift Platform with Confidence!</p>
        //         <img src="'.asset('assets/images/down-arrow.png').'" alt="">
        //         <a href="'.url('/').'" style="margin-top: 20px; background:#1fe287; padding:8px 20px;color:#fff; font-size:20px;text-decoration:none;border-radius:5px;">Click Here</a>
        //     </div>
        //     <footer>
        //         <img src="'.asset('assets/images/city1.png').'" alt="" style="width:100%;">
        //         <div style="background: #000; margin-top:-20px;">
        //             <div style="display: flex; justify-content:center; padding-top:30px;">
        //                 <a href="https://www.instagram.com/invites/contact/?i=2nxyq2sxhhyi&utm_content=7k4l34c"><img src="'.asset('assets/images/instagram.png').'" alt="" style="width: 30px;"></a>
        //                 <a href="https://www.facebook.com/Future-Lift-Education-PVT-LTD-112127913993548/"><img src="'.asset('assets/images/facebook.png').'" alt="" style="width: 30px; margin:0 10px;"></a>
        //                 <a href="https://youtube.com/channel/UCvY_1Aon-HqSHzqWwvIU2zQ"><img src="'.asset('assets/images/youtube.png').'" alt="" style="width: 30px;"></a>
        //                 <a href="https://www.linkedin.com/company/futurelift-duication"><img src="'.asset('assets/images/linkedin.png').'" alt="" style="width: 30px; margin:0 10px;"></a>
        //             </div>
        //             <h2 style="color:#fff;margin:0; text-align:center;margin-top:20px;">About Us</h2>
        //             <p style="color:#fff; text-align:center;padding:0 50px;">At Future Lift, we are not just building a platform; we are crafting an experience.Your expertise and passion for career counseling align perfectly with our mission to empower individuals on their career journeys.
        //                 Visit for More Information <a href="'.url('/').'" style="color: #D61E5C; text-decoration:none;">futurelift.in</a>
        //             </p>
        //             <div style="display: flex; justify-content:center;">
        //                 <a href="'.url('/about').'" style="color:#c5c5c5; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:12px; text-decoration:none;">About Us</a>
        //                 <a href="'.url('/terms-condition').'" style="margin: 0px 8px;color:#c5c5c5; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:12px; text-decoration:none;">| Terms & Conditions |</a>
        //                 <a href="'.url('/policy').'" style="color:#c5c5c5; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:12px; text-decoration:none;">Privacy Policy</a>
        //             </div>
        //             <div style="text-align: center; padding-bottom:30px;"><p style="color:#ec1818; font-family:Verdana, Geneva, Tahoma, sans-serif; padding:0 30px;">@2024 Copyrights reserve by FUTURE LIFT</p></div>
        //         </div>
        //     </footer>

        // </div>

        // </div>';








        $html .= '<tr>
                <td colspan="2" style="text-align: center;">
                    <h1 style="text-align: center; margin:0;">FAQ?</h1>
            </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div style="padding:10px 60px;">
                        <p style="font-size: 20px; text-align:center; margin:0px;">Your Quick Guide to Navigate the Future Lift Platform with Confidence!</p>
                    </div>
                </td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <img src="'.asset('assets/images/down-arrow.png').'" alt="" style="width:30px;">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center; padding:20px 0px;">
                    <a href="'.url('/').'" style="display:tabel; margin-top: 20px; background:#1fe287; padding:8px 20px;color:#fff; font-size:20px;text-decoration:none;border-radius:5px;">Click Here</a>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <img src="'.asset('assets/images/city1.png').'" alt="" style="width:100%;">
                    <div style="background: #000; margin-top:-30px;">
                        <div style="text-align:center; padding-top:30px;">
                            <a href="https://www.instagram.com/invites/contact/?i=2nxyq2sxhhyi&utm_content=7k4l34c"><img src="'.asset('assets/images/instagram.png').'" alt="" style="width: 30px;"></a>
                            <a href="https://www.facebook.com/Future-Lift-Education-PVT-LTD-112127913993548/"><img src="'.asset('assets/images/facebook.png').'" alt="" style="width: 30px; margin:0 10px;"></a>
                            <a href="https://youtube.com/channel/UCvY_1Aon-HqSHzqWwvIU2zQ"><img src="'.asset('assets/images/youtube.png').'" alt="" style="width: 30px;"></a>
                            <a href="https://www.linkedin.com/company/futurelift-duication"><img src="'.asset('assets/images/linkedin.png').'" alt="" style="width: 30px; margin:0 10px;"></a>
                        </div>
                        <h2 style="color:#fff;margin:0; text-align:center;margin-top:20px;">About Us</h2>
                        <p style="color:#fff; text-align:center;padding:0 50px;">At Future Lift, we are not just building a platform; we are crafting an experience.Your expertise and passion for career counseling align perfectly with our mission to empower individuals on their career journeys.
                            Visit for More Information <a href="'.url('/').'" style="color: #D61E5C; text-decoration:none;">futurelift.in</a>
                        </p>
                        <div style="text-align:center;">
                            <a href="'.url('/about').'" style="color:#c5c5c5; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:12px; text-decoration:none;">About Us</a>
                            <a href="'.url('/terms-condition').'" style="margin: 0px 8px;color:#c5c5c5; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:12px; text-decoration:none;">| Terms & Conditions |</a>
                            <a href="'.url('/policy').'" style="color:#c5c5c5; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:12px; text-decoration:none;">Privacy Policy</a>
                        </div>
                        <div style="text-align: center; padding-bottom:30px;">
                            <p style="color:#ec1818; font-family:Verdana, Geneva, Tahoma, sans-serif; padding:0 30px;">@2024 Copyrights reserve by FUTURE LIFT</p>
                        </div>
                    </div>
                </td>
                <td></td>
            </tr>

        </table>';






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
            "smtp"=>"ssl",
            "host"=>"smtp.hostinger.com",
            "username"=>"info@futurelift.in",
            "mailform"=>"info@futurelift.in",
            "password"=>"info@Futurelift2024",
            "port"=>465,
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
    public static function mailDataSave($toMail , $toName , $subject , $body , $status) {
        $mailConfig = json_decode(Helpers::getEmailConfig());
        $mailData = new MailLogs();
        $mailData->toEmail = $toMail;
        $mailData->fromEmail = $mailConfig->mailform;
        $mailData->subject = $subject;
        $mailData->body = base64_encode($body);
        $mailData->status = $status;
        $mailData->save();
    }
    public static function laravelMailSend($toMail , $toName , $subject , $body) {

        $data = [
            'title' => 'Hello World',
            'message' => 'This is a dynamic email message.'
        ];

        $template = 'emails.template1'; // This can be dynamic based on your logic

        //Mail::to('recipient@example.com')->send(new DynamicTemplateMail($data, $template));





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
            case 'helpFaqCategory':
                $flag = false;
                $check = Helpers::accessHasCheck([16]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'helpFaqCategoryAdd':
                $flag = false;
                $check = Helpers::accessHasCheck([16]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'helpFaqCategoryEdit':
                $flag = false;
                $check = Helpers::accessHasCheck([16]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'helpFaqCategoryEditSubmit':
                $flag = false;
                $check = Helpers::accessHasCheck([16]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'indexCouponList':
                $flag = false;
                $check = Helpers::accessHasCheck([17]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'couponAdd':
                $flag = false;
                $check = Helpers::accessHasCheck([17]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'couponEditindex':
                $flag = false;
                $check = Helpers::accessHasCheck([17]);
                if($check){
                    $flag = true;
                }
                return $flag;
                break;
            case 'couponDelete':
                $flag = false;
                $check = Helpers::accessHasCheck([17]);
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
            case 'career_session_booked_reject':
                return '<i class="mdi mdi-alert"></i>';
                break;
            case 'career_session_booked_approve':
                return '<i class="mdi mdi-account-check"></i>';
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
    // public static function welcomeEmailContent($name){
    //     $html = '';
    //     // $html .= '<div style="width: 100%; background:#D61E5C;text-align:center; padding-bottom:30px;">
    //     //         <div style="display:flex; justify-content:center;align-items:center;">
    //     //             <img src="'.asset('assets/images/image1.png').'" alt="" style="width: 300px;">
    //     //         </div>
    //     //         <h2 style="text-align: center; color:#fff;">Hey '.$name.',Welcome!</h2>
    //     //         <p style="text-align: center; color:#fff;padding:20px 100px;">We are more than a platform; we are a community passionate about transforming lives. Your presence adds another dynamic layer to our Future Lift family.</p>
    //     //         <a href="'.url('/user-dashboard').'" style="background: #1fe2e2; padding:8px 20px;color:#fff;text-decoration:none; border-radius:5px;">GET STARTED</a>
    //     //     </div>
    //     //     <div style="text-align: center; margin-top:30px;"><h2 style="font-size: 30px; font-family:Georgia,  Times, serif; margin:0px;">What Next ?</h2></div>
    //     //     <div style="display: flex; flex-wrap:wrap; align-items:center; justify-content:center; width:100%">
    //     //         <div ><img src="'.asset('assets/images/image3.png').'" alt="" style="width: 200px;"></div>
    //     //         <div style="display: flex; flex-direction:column;">
    //     //             <h2 style="margin: 0; margin-bottom:15px; font-size:25px; font-weight:700; font-family: Times, serif; color:#D61E5C; text-align:left;">Connect with Us</h2>
    //     //             <p style="font-size:20px; margin: 0;">Have questions, ideas, or just want to say hi?</p>
    //     //             <p style="font-size:20px; margin: 0;"> Reach out to us</p>
    //     //             <p style="font-size: 20px;">at <a href="tel:+91 8617373674" style="text-decoration: none; color:#D61E5C;font-family:Arial, Helvetica, sans-serif; font-weight:600; font-size:16px;"> +91 8617373674</a> or <a href="mailto:myfuturelift@gmail.com" style="text-decoration: none; color:#D61E5C; font-family:Arial, Helvetica, sans-serif; font-weight:600; font-size:16px;" >myfuturelift@gmail.com</a></p>
    //     //         </div>
    //     //     </div>
    //     //     <div style="display: flex; flex-wrap:wrap; align-items:center; justify-content:center;">
    //     //         <div ><img src="'.asset('assets/images/image4.png').'" alt="" style="width: 200px;"></div>
    //     //         <div style="display: flex; flex-direction:column;">
    //     //             <h2 style="margin: 0; margin-bottom:15px; font-size:25px; font-weight:700; font-family: Times, serif; color:#D61E5C; text-align:left;">Tech Savvy?</h2>
    //     //             <p style="font-size:20px; margin: 0;">Dive into our advanced technology and tools,</p>
    //     //             <p style="font-size:20px; margin: 0;"> and let the magic of Future Lift unfold.</p>
    //     //         </div>
    //     //     </div>
    //     //     <div style="display: flex; flex-wrap:wrap; align-items:center; justify-content:center; padding: 0px 50px;">
    //     //         <div ><img src="'.asset('assets/images/image2.png').'" alt="" style="width: 200px;"></div>
    //     //         <div style="display: flex; flex-direction:column;">
    //     //             <h2 style="margin: 0; margin-bottom:15px; font-size:25px; font-weight:700; font-family: Times, serif; color:#D61E5C; text-align:left;">Be Yourself</h2>
    //     //             <p style="font-size:20px; margin: 0;">Embrace the freedom to be your authentic,</p>
    //     //             <p style="font-size:20px; margin: 0;"> counseling-extraordinaire self. We value you </p>
    //     //             <p style="font-size:20px; margin: 0;">for you!</p>
    //     //         </div>
    //     //     </div>';






    //     $html .= '<tr>
    //             <td colspan="2" style="text-align: center;">
    //                 <div style="width: 100%; background:#D61E5C;text-align:center; padding-bottom:30px;">
    //                     <div>
    //                         <img src="'.asset('assets/images/Image1.png').'" alt="" style="width: 300px;">
    //                     </div>
    //                     <h2 style="text-align: center; color:#fff;">Hey '.$name.',Welcome!</h2>
    //                     <p style="text-align: center; color:#fff;padding:20px 100px;">We are more than a platform; we are a community passionate about transforming lives. Your presence adds another dynamic layer to our Future Lift family.</p>
    //                     <a href="'.url('/').'" style="background: #1fe2e2; padding:8px 20px;color:#fff;text-decoration:none; border-radius:5px;">GET STARTED</a>
    //                 </div>
    //             </td>
    //             <td></td>
    //         </tr>
    //         <tr>
    //             <td colspan="2">
    //                 <div style="text-align: center; margin-top:30px;">
    //                     <h2 style="font-size: 30px; font-family:Georgia,  Times, serif; margin:0px;">What Next ?</h2>
    //                 </div>
    //             </td>
    //             <td></td>
    //         </tr>
    //         <tr style="margin-top:30px;">
    //             <td style="text-align: right;">
    //                 <div ><img src="'.asset('assets/images/image3.png').'" alt="" style="width: 200px;"></div>
    //             </td>
    //             <td style="width:50%;">
    //                 <h2 style="margin: 0; margin-bottom:15px; font-size:18px; font-weight:700; font-family:Verdana, Geneva, Tahoma, sans-serif; color:#D61E5C; text-align:left;">Connect Us</h2>
    //                 <p style="font-size:16px; margin: 0; padding-right:50px;">Have questions, ideas, or just want to say hi? Reach out to us at <a href="tel:+91 8617373674" style="text-decoration: none; color:#D61E5C;font-family:Arial, Helvetica, sans-serif; font-weight:600; font-size:12px;"> +91 8617373674</a> or <a href="mailto:myfuturelift@gmail.com" style="text-decoration: none; color:#D61E5C; font-family:Arial, Helvetica, sans-serif; font-weight:600; font-size:12px;" >myfuturelift@gmail.com</a></p>
    //             </td>
    //         </tr>
    //         <tr>
    //             <td style="text-align: right;">
    //                 <div ><img src="'.asset('assets/images/image4.png').'" alt="" style="width: 200px;"></div>
    //             </td>
    //             <td>
    //                 <div>
    //                     <h2 style="margin: 0; margin-bottom:15px; font-size:18px; font-weight:700; font-family: Verdana, Geneva, Tahoma, sans-serif; color:#D61E5C; text-align:left;">Tech Savvy?</h2>
    //                     <p style="font-size:16px; margin: 0;">Dive into our advanced technology and tools, and let the magic of Future Lift unfold.</p>
    //                 </div>
    //             </td>
    //         </tr>
    //         <tr>
    //             <td style="text-align: right;">
    //                 <div ><img src="'.asset('assets/images/image2.png').'" alt="" style="width: 200px;"></div>
    //             </td>
    //             <td>
    //                 <div>
    //                     <h2 style="margin: 0; margin-bottom:15px; font-size:18px; font-weight:700; font-family: Verdana, Geneva, Tahoma, sans-serif; color:#D61E5C; text-align:left;">Be Yourself</h2>
    //                     <p style="font-size:16px; margin: 0;">Embrace the freedom to be your authentic,  counseling-extraordinaire self. We value you for you!</p>
    //                 </div>
    //             </td>
    //         </tr>';






    //     return $html;
    // }
    public static function welcomeEmailContent($name,$email,$subject){
        $data = [
            "name" => $name
        ];


        $template = 'template.welcome-mail'; // This can be dynamic based on your logic

        $mailResponse = Mail::to($email)->send(new DynamicTemplateMail($data, $template,$subject));
        if(Mail::failures()){
            $status = "failed";
        }else{
            $status = "success";

        }
        Helpers::mailDataSave($email , $name , $subject , json_encode($data) , $status);
    }
    // public static function forgotPasswordEmailContent($name,$link){
    //     $html = '';
    //     // $html .= '<div style="display: flex; justify-content:center; align-items:center; flex-direction:column; margin-top:30px; background:#ececec; padding:20px 0px; width:90%">
    //     //         <div style="border:#D61E5C solid 3px; text-align:center; padding:0 15px;">
    //     //             <span style="display: block; margin-top:-10px; background:#ececec; font-size:18px; font-family:Verdana, Geneva, Tahoma, sans-serif; color:#D61E5C;">Forgot</span>
    //     //             <span style="display: block; margin-bottom:-10px; background:#ececec; font-size:22px; font-family:Verdana, Geneva, Tahoma, sans-serif; font-weight:700; padding:10px; color:#D61E5C;">Your Password</span>
    //     //         </div>
    //     //         <img src="'.asset('assets/images/Customer_feedback-1.png').'" alt="" style="width: 320px;">
    //     //     </div>
    //     //     <div style="width:90%;">
    //     //         <h4 style=" text-align:left; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:22px">Dear '.$name.',</h4>
    //     //         <p style=" text-align:left; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:16px;">Greetings from <span style="color:#D61E5C;"> FUTURE LIFT.</span></p>
    //     //         <p style=" text-align:left; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:16px; line-height:1.7;">Oops! It happens to the best of us - forgetting
    //     //             passwords, that is. But fret not! We have got your back.
    //     //             Click the button below to set a shiny new password
    //     //             and get back to what you were doing: <span>Reset you password: <a href="'.$link.'" style="color:#D61E5C; font-weight:700;">Click Here</a></span>
    //     //         </p>
    //     //         <p style=" text-align:left; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:16px; line-height:1.7;">Remember, your security is our priority. If you did not
    //     //             request this, no worries. Just ignore this email and
    //     //             your account will stay safe and sound.
    //     //         </p>
    //     //         <p style=" text-align:left; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:16px; line-height:1.7;">
    //     //             Thank You,
    //     //         </p>
    //     //         <p style=" text-align:left; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:16px; line-height:1.7;margin:0px;"> Technical Team </p>
    //     //         <p style=" text-align:left; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:16px; line-height:1.7; color:#D61E5C; font-weight:700;margin:0px;"> FUTURE LIFT</p>
    //     //     </div>';






    //     $html .= '<tr>
    //             <td colspan="2" style="background:#ececec; text-align:center;">
    //                 <img src="'.asset('assets/images/Customer_feedback-1.png').'" alt="" style="width: 350px;">
    //             </td>
    //             <td></td>
    //         </tr>
    //         <tr>
    //             <td colspan="2">
    //                     <h4 style=" text-align:left; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:22px"><b>Dear '.$name.',</b></h4>
    //                     <p style=" text-align:left; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:16px;">Greetings from <span style="color:#D61E5C;"> FUTURE LIFT.</span></p>
    //                     <p style=" text-align:left; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:16px; line-height:1.7;">Oops! It happens to the best of us – forgetting
    //                         passwords, that is. But fret not! We have got your back.
    //                         Click the button below to set a shiny new password
    //                         and get back to what you were doing: <span>Reset you password: <a href="'.$link.'" style="color:#D61E5C; font-weight:700;">Click Here</a></span>
    //                     </p>
    //                     <p style=" text-align:left; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:16px; line-height:1.7;">Remember, your security is our priority. If you did not
    //                         request this, no worries. Just ignore this email and
    //                         your account will stay safe and sound.
    //                     </p>
    //                     <p style=" text-align:left; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:16px; line-height:1.7;">
    //                         Thank You,
    //                     </p>
    //                     <p style=" text-align:left; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:16px; line-height:1.7;margin:0px;"> Technical Team </p>
    //                     <p style=" text-align:left; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:16px; line-height:1.7; color:#D61E5C; font-weight:700;margin:0px;"> FUTURE LIFT</p>
    //             </td>
    //             <td></td>
    //         </tr>';

    //     return $html;
    // }
    public static function forgotPasswordEmailContent($name,$link,$email,$subject){
        $data = [
            "name" => $name,
            "link" => $link
        ];


        $template = 'template.forgot-password-mail'; // This can be dynamic based on your logic

        $mailResponse = Mail::to($email)->send(new DynamicTemplateMail($data, $template,$subject));
        if(Mail::failures()){
            $status = "failed";
        }else{
            $status = "success";

        }
        Helpers::mailDataSave($email , $name , $subject , json_encode($data) , $status);
    }
    // public static function referMailContent($name,$link,$code){
    //     $html = '';
    //     // $html .= '<p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span dir="ltr" lang="EN" style="font-family:&quot;Calibri&quot;,sans-serif">Hey '.$name.',</span></span></span></p>

    //     // <p>&nbsp;</p>

    //     // <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span dir="ltr" lang="EN" style="font-family:&quot;Calibri&quot;,sans-serif">I&#39;ve been using FUTURE LIFT, a fantastic career counseling platform that offers a wide range of resources, guidance, and support to help you navigate your career path effectively. Whether you&#39;re a student looking for internships, a recent graduate seeking job opportunity, or simply someone who wants to explore various career options, FUTURE LIFT has got you covered.</span></span></span></p>

    //     // <p>&nbsp;</p>

    //     // <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><strong><span dir="ltr" lang="EN" style="font-family:&quot;Calibri&quot;,sans-serif">Here&#39;s why I think you should check it out:</span></strong></span></span></p>

    //     // <p>&nbsp;</p>

    //     // <ul style="list-style-type:circle">
    //     //     <li><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><strong><span dir="ltr" lang="EN" style="font-family:&quot;Calibri&quot;,sans-serif">Personalized Career Guidance:</span></strong><span dir="ltr" lang="EN" style="font-family:&quot;Calibri&quot;,sans-serif"> FUTURE LIFT offers personalized career counseling sessions with experienced advisors who can help you define and achieve your career goals.</span></span></span></li>
    //     //     <li><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><strong><span dir="ltr" lang="EN" style="font-family:&quot;Calibri&quot;,sans-serif">Rich Resource Library:</span></strong><span dir="ltr" lang="EN" style="font-family:&quot;Calibri&quot;,sans-serif"> You&#39;ll find a treasure trove of articles, webinars, and assessments that provide insights into different industries, job search strategies, and skill development.</span></span></span></li>
    //     //     <li><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><strong><span dir="ltr" lang="EN" style="font-family:&quot;Calibri&quot;,sans-serif">Job and Internship Opportunities</span></strong><span dir="ltr" lang="EN" style="font-family:&quot;Calibri&quot;,sans-serif">: The platform regularly updates job listings and internship opportunities, making it easier for you to find and apply for positions in your field of interest.</span></span></span></li>
    //     // </ul>

    //     // <p>&nbsp;</p>

    //     // <p style="text-align:center">&nbsp;</p>

    //     // <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span dir="ltr" lang="EN" style="font-family:&quot;Calibri&quot;,sans-serif">The best part? If you sign up through my referral link, you&#39;ll receive a special welcome offer! Here&#39;s the link to get started: <strong><em><a href="'.$link.'">'.$link.' </a></em></strong><span style="background-color:darkblue"><span style="color:white"><a href="'.$link.'" style="color:white">Click Here</a></span></span></span></span></span></p>

    //     // <p>&nbsp;</p>

    //     // <p>&nbsp;</p>

    //     // <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span dir="ltr" lang="EN" style="font-family:&quot;Calibri&quot;,sans-serif">I&#39;ve already benefited a lot from using FUTURE LIFT, and I believe you will too. Feel free to reach out if you have any questions or if you&#39;d like to chat about how FUTURE LIFT can help you achieve your career aspirations.</span></span></span></p>

    //     // <p><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><span dir="ltr" lang="EN" style="font-family:&quot;Calibri&quot;,sans-serif">Looking forward to seeing you thrive in your career journey!</span></span></span></p>
    //     // ';


    //     $html .= '<tr>
    //             <td colspan="2" style="text-align:center;">
    //                 <h1 style="font-family: Verdana, sans-serif;font-size:22px;"> <b>Unlock Success with Future Lift - Your Referral Code Inside! <img src="'.asset('assets/images/rocket.png').'" alt="" style="width:30px;"> </b></h1>
    //             </td>
    //             <td></td>
    //         </tr>
    //         <tr>
    //             <td colspan="2">

    //                 <h4 style=" text-align:left; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:22px; font-weight:300;">Dear <span style="font-weight:600;">'.$name.',</span></h4>
    //                 <p style=" text-align:left; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:18px;">Hope you are doing awesome!<img src="'.asset('assets/images/party.png').'" alt="" style="width: 20px;"> I have got something super exciting to share with you - your ticket to unlocking career success with Future Lift!</p>
    //             </td>
    //             <td></td>
    //         </tr>
    //         <tr>
    //             <td colspan="2" style="text-align: center;"><h4 style="font-size: 18px; font-family:Verdana, Geneva, Tahoma, sans-serif; margin:0px;padding:8px; border-top:1px solid #fc3175;">As promised, here your exclusive Referral Code:</h4></td>
    //             <td style="text-align: left;"></td>
    //         </tr>
    //         <tr>
    //             <td colspan="2" style="text-align: center; font-size: 18px; font-family:Verdana, Geneva, Tahoma, sans-serif; border-top:1px solid #fc3175; padding:8px;">'.$code.'</td>
    //         </tr>
    //         <tr>
    //             <td colspan="2" style="text-align: center; border-top:1px solid #fc3175;"><h4 style="font-size: 18px; font-family:Verdana, Geneva, Tahoma, sans-serif; margin:0px; padding:8px;"> Referral Link:</h4></td>
    //             <td></td>
    //         </tr>
    //         <tr>
    //             <td colspan="2" style="text-align: center; border-top:1px solid #fc3175;"><a href="" style="font-size: 18px; font-family:Verdana, Geneva, Tahoma, sans-serif; display:block; width:100%;padding:8px 0px;"><a href="'.$link.'">'.$link.'</a></a></td>
    //         </tr>
    //         <tr>
    //             <td colspan="2" style="background: #D61E5C;">
    //                 <h1 style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:23px; color:#ffffff;"> With this code, you can:</h1>
    //                 <ul style="list-style:decimal-leading; margin-left:0;">
    //                     <li style="padding:8px; font-size:18px; font-family:Verdana, Geneva, Tahoma, sans-serif;color:#ffffff;">Log in to our platform and explore our range of career counselling services.</li>
    //                     <li  style="padding:8px; font-size:18px; font-family:Verdana, Geneva, Tahoma, sans-serif;color:#ffffff;">Purchase a subscription package tailored to your needs and budget.</li>
    //                     <li  style="padding:8px; font-size:18px; font-family:Verdana, Geneva, Tahoma, sans-serif;color:#ffffff;">Book your personalized counselling sessions at your convenience. (Psst... each subscription package includes 3 sessions!)</li>
    //                 </ul>
    //             </td>
    //             <td></td>
    //         </tr>
    //         <tr>
    //             <td colspan="2">
    //                 <p style=" text-align:left; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:16px;">But wait, there are more! By using this code, you not only get access to expert guidance but also enjoy our amazing product. Talk about a win-win, am I right?<img src="'.asset('assets/images/party.png').'" style="width:20px;" alt=""></p>
    //                 <p style=" text-align:left; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:16px; line-height:1.7;">
    //                     Thank You,
    //                 </p>
    //                 <p style=" text-align:left; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:16px; line-height:1.7;margin:0px;"> Technical Team </p>
    //                 <p style=" text-align:left; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:16px; line-height:1.7; color:#D61E5C; font-weight:700;margin:0px;"> FUTURE LIFT</p>
    //             </td>
    //             <td></td>
    //         </tr>';





    //     return $html;
    // }
    public static function referMailContent($name,$link,$code,$email,$subject){
        $data = [
            "name" => $name,
            "link" => $link,
            "code" => $code
        ];


        $template = 'template.refer-mail'; // This can be dynamic based on your logic

        $mailResponse = Mail::to($email)->send(new DynamicTemplateMail($data, $template,$subject));
        if(Mail::failures()){
            $status = "failed";
        }else{
            $status = "success";

        }
        Helpers::mailDataSave($email , $name , $subject , json_encode($data) , $status);
    }
    // public static function ownReferMailContent($name,$link,$code){
    //     $html = '';



    //     $html .= '<tr>
    //                 <td colspan="2" style="text-align:center;">
    //                     <img src="'.asset('assets/images/referEarn.png').'" alt="" style="width: 50%;">
    //                 </td>
    //                 <td></td>
    //             </tr>
    //             <tr>
    //                 <td colspan="2">
    //                     <h1 style="text-align: center; font-family:Verdana, Geneva, Tahoma, sans-serif;font-size:25px;"> <b>Get 500 Rupees for Every Friend You Invite!</b></h1>
    //                     <h4 style=" text-align:left; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:22px; font-weight:300;">Dear <span style="font-weight:600;">'.$name.',</span></h4>
    //                     <p style=" text-align:left; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:16px;">Ready to earn some extra cash while spreading the
    //                         love for <span style="font-weight: 600;"> FUTURE LIFT?</span> <img src="'.asset('assets/images/confetty.png').'" alt="" style="width:30px;">
    //                     <p style=" text-align:left; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:16px; line-height:1.7;">Introducing our Refer & Earn program - the easiest
    //                         way to score 500 Rupees for every friend you invite
    //                         who purchases our product!</p>
    //                     <p style=" text-align:left; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:16px; line-height:1.7;">Remember, your security is our priority. If you did not
    //                         request this, no worries. Just ignore this email and
    //                         your account will stay safe and sound.
    //                     </p>
    //                 </td>
    //                 <td></td>
    //             </tr>
    //             <tr>
    //                 <td colspan="2">
    //                     <h1 style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:23px;"><b>Here how it works:</b></h1>
    //                     <ul style="list-style:decimal-leading; margin-left:0;">
    //                         <li style="padding:8px; font-size:18px; font-family:Verdana, Geneva, Tahoma, sans-serif;">Share your unique Referral Code or use the Direct Referral Link below</li>
    //                         <li  style="padding:8px; font-size:18px; font-family:Verdana, Geneva, Tahoma, sans-serif;">Your friend makes a purchase using your code or link.</li>
    //                         <li  style="padding:8px; font-size:18px; font-family:Verdana, Geneva, Tahoma, sans-serif;">You both get rewarded! They enjoy our amazing product, and you pocket 500 Rupees. Its a win win!</li>
    //                     </ul>
    //                     <h1 style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:23px;"><b>Your Referral Code: </b><span style="color: #D61E5C;">'.$code.'</span></h1>
    //                     <h1 style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:23px;"><b>Your Direct Referral Link: </b><span style="color: #D61E5C;"><a href="'.$link.'">'.$link.'</a></span></h1>
    //                     <p style=" text-align:left; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:16px;">Spread the word, earn rewards, and lets make this a community of winners together!</p>
    //                     <p style=" text-align:left; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:16px; line-height:1.7;">
    //                         Thank You,
    //                     </p>
    //                     <p style=" text-align:left; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:16px; line-height:1.7;margin:0px;"> Technical Team </p>
    //                     <p style=" text-align:left; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:16px; line-height:1.7; color:#D61E5C; font-weight:700;margin:0px;"> FUTURE LIFT</p>
    //                 </td>
    //                 <td></td>
    //             </tr>';





    //     return $html;
    // }
    public static function ownReferMailContent($name,$link,$code,$email,$subject){
        $data = [
            "name" => $name,
            "link" => $link,
            "code" => $code
        ];


        $template = 'template.own-refer-mail'; // This can be dynamic based on your logic

        $mailResponse = Mail::to($email)->send(new DynamicTemplateMail($data, $template,$subject));
        if(Mail::failures()){
            $status = "failed";
        }else{
            $status = "success";

        }
        Helpers::mailDataSave($email , $name , $subject , json_encode($data) , $status);
    }
    // public static function blogMailContent($title,$image,$link,$content){
    //     $html = '';
    //     $html .= '<p>&nbsp;</p>

    //     <p style="text-align:center"><a href="'.$link.'"><span style="font-size:14pt;font-weight:900;"><span style="font-family:Arial,sans-serif"><span style="background-color:yellow">'.$title.'</span></span></span></a></p>

    //     <p style="text-align:center">&nbsp;</p>

    //     <p style="text-align:center">
    //         <a href="'.$link.'"><img style="width:300px;border-radius:10px;" src="'.$image.'"></a>
    //     </p>
    //     <div>
    //         <p style="text-align:center;font-size:19px;">
    //             '.$content.'
    //         </p>
    //     </div>
    //     <p style="text-align:center"><a href="'.url('/blog').'"><span style="font-size:11pt"><span style="font-family:Arial,sans-serif"><strong><span style="background-color:darkblue;padding:8px;margin-top:20px;"><span style="color:white">Read More Blogs</span></span></strong></span></span></a></p>

    //     <p>&nbsp;</p>

    //     <p><span dir="ltr" lang="EN" style="font-size:11.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">At FUTURE LIFT, we&#39;re here to support you every step of the way. Explore our platform for a wealth of resources, career counseling sessions, and job opportunities tailored to your interests.</span></span></p>
    //     ';

    //     return $html;
    // }
    public static function blogMailContent($title,$image,$link,$content,$email,$subject){
        $data = [
            "title" => $title,
            "image" => $image,
            "link" => $link,
            "content" => $content
        ];


        $template = 'template.blog-mail'; // This can be dynamic based on your logic

        $mailResponse = Mail::to($email)->send(new DynamicTemplateMail($data, $template,$subject));
        if(Mail::failures()){
            $status = "failed";
        }else{
            $status = "success";

        }
        Helpers::mailDataSave($email , 'email subscriber' , $subject , json_encode($data) , $status);
    }
    // public static function sessionRejectedEmailContent($name,$date_time){
    //     $html = '';
    //     $html .= '<p>Dear '.$name.',</p>

    //     <p>We regret to inform you that your session, scheduled for '.$date_time.', has been rejected due to unforeseen circumstances. We apologize for any inconvenience this may cause.</p>

    //     <p>To proceed, kindly Re-schedule your session.</p>';

    //     return $html;
    // }
    public static function sessionRejectedEmailContent($name,$date_time,$email,$subject){
        $data = [
            "name" => $name,
            "date_time" => $date_time
        ];


        $template = 'template.session-reject-mail'; // This can be dynamic based on your logic

        $mailResponse = Mail::to($email)->send(new DynamicTemplateMail($data, $template,$subject));
        if(Mail::failures()){
            $status = "failed";
        }else{
            $status = "success";

        }
        Helpers::mailDataSave($email , $name , $subject , json_encode($data) , $status);
    }
    // public static function sessionCreateEmailContent($name,$session_count,$session_date,$session_time,$session_link='https://meet.google.com/aad-ntwy-tjc',$duration='60 mins'){
    //     $html = '';
    //     // $html .= '<div style="width: 100%; background:#D61E5C;text-align:center; padding-bottom:30px;">
    //     //     <h2 style="text-align: center; color:#fff; font-size:30px; padding-bottom:100px;">Hey '.$name.'!</h2>
    //     //     </div>
    //     //     <div style=" background:#fff;  padding:20px 20px 50px; margin-top:-120px;  text-align:center; max-width:80%;">
    //     //         <p style="text-align: center; color:#fff; color:#000;padding-bottom:40px; font-size:22px;">We hope this message finds you well. Thank you for choosing Future Lift for your career counseling needs. We are thrilled to assist you on your journey to asuccessful and fulfilling career.</p>
    //     //         <a href="" style="background: #1fe2e2; padding:8px 20px;color:#fff;text-decoration:none; border-radius:5px; text-transform:uppercase;">learn more</a>
    //     //     </div>
    //     //     <div>
    //     //         <div style="overflow: hidden;">
    //     //             <h1 style="text-align: center; font-size:30px; color:#D61E5C;">Session Scheduled!</h1>
    //     //             <p style="text-align: center; font-size:22px;">Thank You for booking <span style="color:#D61E5C;">'.Helpers::ordinal($session_count).' Session</span></p>
    //     //             <h1 style="text-align: center;">Session Details</h1>
    //     //             <table style="width: 100%; text-align:center; font-family: arial, sans-serif; border-collapse: collapse;">
    //     //                 <tr>
    //     //                     <td style="border: 1px solid #dddddd; text-align: left;  padding: 8px;"><p style="font-size: 18px;margin:0px;">Date:</p></td>
    //     //                     <td  style="border: 1px solid #dddddd; text-align: left;  padding: 8px;"><p style="font-size: 18px; margin:0px;">'.$session_date.'</p></td>
    //     //                 </tr>
    //     //                 <tr>
    //     //                     <td  style="border: 1px solid #dddddd; text-align: left;  padding: 8px;"><p style="font-size: 18px;margin:0px;">Time:</p></td>
    //     //                     <td  style="border: 1px solid #dddddd; text-align: left;  padding: 8px;"><p style="font-size: 18px; margin:0px;">'.$session_time.'</p></td>
    //     //                 </tr>
    //     //                 <tr>
    //     //                     <td  style="border: 1px solid #dddddd; text-align: left;  padding: 8px;"><p style="font-size: 18px;margin:0px;">Duration:</p></td>
    //     //                     <td  style="border: 1px solid #dddddd; text-align: left;  padding: 8px;"><p style="font-size: 18px; margin:0px;">'.$duration.'</p></td>
    //     //                 </tr>
    //     //                 <tr>
    //     //                     <td  style="border: 1px solid #dddddd; text-align: left;  padding: 8px;"><p style="font-size: 18px;margin:0px;">Session Link:</p></td>
    //     //                     <td  style="border: 1px solid #dddddd; text-align: left;  padding: 8px;"><p style="font-size: 18px; margin:0px;"><a href="'.$session_link.'">'.$session_link.'</a></p></td>
    //     //                 </tr>
    //     //             </table>
    //     //         </div>
    //     //     </div>
    //     //     <div style="text-align: center; margin-top:30px;">
    //     //         <h2 style="font-size: 25px; background:#D61E5C; color:#fff; font-family:Georgia, Times, serif; margin:0px;padding:10px 20px; border-radius:20px;">Instruction for the Session</h2>
    //     //     </div>
    //     //     <div style="display: flex; flex-wrap:wrap; align-items:center; justify-content:center; width:100%">
    //     //         <div ><img src="'.asset('assets/images/Inst.png').'" alt="" style="width: 100%;"></div>
    //     //     </div>

    //     //     <div style="display: flex; justify-content:center; text-align:center; ">
    //     //         <div style=" padding:15px 50px; width:100%; background: #ECF0F1; border-radius:8px;">
    //     //             <p style="font-size:20px; margin: 0; font-size:30px; padding-bottom:20px;">Any queries about the Payment?</p>
    //     //             <a href="#" style="text-decoration: none; font-size:22px; font-family:Verdana, Geneva, Tahoma, sans-serif; font-weight:700">Chat with us.</a>
    //     //         </div>
    //     //     </div>';


    //     $html .= '<tr>
    //             <td colspan="2" style="background: #D61E5C;">
    //                 <h2 style="text-align: center; color:#fff; font-size:30px;">Hey '.$name.'!</h2>
    //             </td>
    //             <td></td>
    //         </tr>
    //         <tr>
    //             <td colspan="2" style="text-align: center; background:#D61E5C; padding-bottom:30px;">

    //                 <p style="text-align:center; padding:40px; color:#000; background:#ffffff; font-size:22px;">We hope this message finds you well. Thank you for choosing Future Lift for your career counseling needs. We are thrilled to assist you on your journey to asuccessful and fulfilling career.
    //                     <div style="margin-top: -30px;"><a href="" style=" background: #1fe2e2; padding:8px 20px;color:#fff;text-decoration:none; border-radius:5px; text-transform:uppercase;">learn more</a></div>
    //                 </p>


    //             </td>
    //             <td></td>
    //         </tr>
    //         <tr>
    //             <td colspan="2" style="text-align: center;">
    //                 <h1 style="margin: 0; margin-top:30px;">Session Scheduled!</h1>
    //             </td>
    //             <td></td>
    //         </tr>
    //         <tr>
    //             <td colspan="2">
    //                 <p style="text-align: center; font-size:22px;">Thank You for booking <span style="color:#D61E5C;">'.Helpers::ordinal($session_count).' Session</span></p>
    //             </td>
    //             <td></td>
    //         </tr>
    //         <tr>
    //             <td colspan="2" style="text-align: center;"><h1 style="text-align: center; margin:0px; padding-bottom:30px;">Session Details</h1></td>
    //             <td></td>
    //         </tr>
    //         <tr>
    //             <td style="text-align: center; padding:8px; border-top:1px solid #f02266;"><p>Date</p></td>
    //             <td style="text-align: center; padding:8px; border-top:1px solid #f02266;"><p>'.$session_date.'</p></td>

    //         </tr>
    //         <tr>
    //             <td style="text-align: center; padding:8px; border-top:1px solid #f02266;"><p>Time</p></td>
    //             <td style="text-align: center; padding:8px; border-top:1px solid #f02266;"><p>'.$session_time.'</p></td>

    //         </tr>
    //         <tr>
    //             <td style="text-align: center; padding:8px; border-top:1px solid #f02266;"><p>Duration</p></td>
    //             <td style="text-align: center; padding:8px; border-top:1px solid #f02266;"><p>'.$duration.'</p></td>

    //         </tr>
    //         <tr>
    //             <td style="text-align: center; padding:8px; border-top:1px solid #f02266; border-bottom:1px solid #f02266;"><p>Session Link</p></td>
    //             <td style="text-align: center; padding:8px; border-top:1px solid #f02266; border-bottom:1px solid #f02266;"><p><a href="'.$session_link.'">'.$session_link.'</a></p></td>
    //         </tr>
    //         <tr>
    //             <td colspan="2" style="text-align: center;"><h2 style="font-size: 25px; background:#D61E5C; color:#fff; font-family:Georgia, Times, serif; margin:0px; margin-top:30px; padding:10px 20px; border-radius:20px;">Instruction for the Session</h2></td>
    //             <td></td>
    //         </tr>
    //         <tr>
    //             <td colspan="2" style="text-align: center;">
    //                 <div style=" padding:15px 50px; background: #ECF0F1; border-radius:8px; margin-top:30px;">
    //                     <p style="font-size:20px; margin: 0; font-size:30px; padding-bottom:20px;">Any queries about the Payment?</p>
    //                     <a href="" style="text-decoration: none; font-size:22px; font-family:Verdana, Geneva, Tahoma, sans-serif; font-weight:700">Chat with us.</a>
    //                 </div>
    //             </td>
    //             <td></td>
    //         </tr>';

    //     return $html;
    // }
    public static function sessionCreateEmailContent($name,$session_count,$session_date,$session_time,$session_link='https://meet.google.com/aad-ntwy-tjc',$email,$subject,$duration='60 mins'){
        $data = [
            "name" => $name,
            "session_count" => Helpers::ordinal($session_count),
            "session_date" => $session_date,
            "session_time" => $session_time,
            "session_link" => $session_link,
            "duration" => $duration
        ];


        $template = 'template.session-accept-mail'; // This can be dynamic based on your logic

        $mailResponse = Mail::to($email)->send(new DynamicTemplateMail($data, $template,$subject));
        if(Mail::failures()){
            $status = "failed";
        }else{
            $status = "success";

        }
        Helpers::mailDataSave($email , $name , $subject , json_encode($data) , $status);
    }
    // public static function sessionPaymentSuccessEmailContent($name,$amount,$package_name,$order_id,$txn_id){
    //     $html = '';
    //     // $html .= '<div style="width: 100%; background:#D61E5C;text-align:center; padding-bottom:30px;">
    //     //         <h2 style="text-align: center; color:#fff; font-size:30px; padding-bottom:100px;">Hey '.$name.'!</h2>
    //     //     </div>
    //     //     <div style=" background:#fff;  padding:20px 20px 50px; margin-top:-120px;  text-align:center; max-width:80%;">
    //     //         <p style="text-align: center; color:#fff; color:#000;padding-bottom:40px; font-size:22px;">Thank you for choosing Future Lift for your online career counseling needs! We are thrilled to have you on board and look forward to assisting you on your a successful and fulfilling career.</p>
    //     //         <a href="" style="background: #1fe2e2; padding:8px 20px;color:#fff;text-decoration:none; border-radius:5px; text-transform:uppercase;">learn more</a>
    //     //     </div>
    //     //     <div>
    //     //         <div style="overflow: hidden;">
    //     //             <h1 style="text-align: center; font-size:30px; color:#42a10b;">Payment Completed!</h1>
    //     //             <div style="display: flex; justify-content:center; align-items:center;"><img src="'.asset('assets/images/check-icon.png').'" alt="" style="width:30px"><h3 style="margin-left: 20px; font-size:25px;"> ₹'.$amount.'</h3></div>
    //     //             <h1 style="text-align: center;">Transaction Details</h1>
    //     //             <table style="width: 100%; text-align:center; font-family: arial, sans-serif; border-collapse: collapse;">
    //     //                 <tr>
    //     //                     <td  style="border: 1px solid #dddddd; text-align: left;  padding: 8px;"><p style="font-size: 18px;margin:0px;">Subscription Package:</p></td>
    //     //                     <td  style="border: 1px solid #dddddd; text-align: left;  padding: 8px;"><p style="font-size: 18px; margin:0px;">'.$package_name.'</p></td>
    //     //                 </tr>
    //     //                 <tr>
    //     //                     <td  style="border: 1px solid #dddddd; text-align: left;  padding: 8px;"><p style="font-size: 18px;margin:0px;">Order ID:</p></td>
    //     //                     <td  style="border: 1px solid #dddddd; text-align: left;  padding: 8px;"><p style="font-size: 18px; margin:0px;">'.$order_id.'</p></td>
    //     //                     <td></td>
    //     //                 </tr>
    //     //                 <tr>
    //     //                     <td  style="border: 1px solid #dddddd; text-align: left;  padding: 8px;"><p style="font-size: 18px;margin:0px;">Transaction ID:</p></td>
    //     //                     <td  style="border: 1px solid #dddddd; text-align: left;  padding: 8px;"><p style="font-size: 18px; margin:0px;">'.$txn_id.'</p></td>
    //     //                     <td></td>
    //     //                 </tr>
    //     //                 <tr>
    //     //                     <td  style="border: 1px solid #dddddd; text-align: left;  padding: 8px;"><p style="font-size: 18px;margin:0px;">Payment Date:</p></td>
    //     //                     <td style="border: 1px solid #dddddd; text-align: left;  padding: 8px;"><p style="font-size: 18px; margin:0px;">'.date('l jS F Y h:i A').'</p></td>
    //     //                 </tr>
    //     //             </table>
    //     //         </div>
    //     //     </div>
    //     //     <div style="display: flex; justify-content:center; text-align:center;margin-top:30px; ">
    //     //         <div style=" padding:15px 50px; width:100%; background: #ECF0F1; border-radius:8px;">
    //     //             <p style="font-size:20px; margin: 0; font-size:30px; padding-bottom:20px;">Any queries about the Payment?</p>
    //     //             <a href="" style="text-decoration: none; font-size:22px; font-family:Verdana, Geneva, Tahoma, sans-serif; font-weight:700">Chat with us.</a>
    //     //         </div>
    //     //     </div>';






    //     $html .= '<tr>
    //                 <td colspan="2" style="background: #D61E5C;">
    //                     <h2 style="text-align: center; color:#fff; font-size:30px;">Hey '.$name.'!</h2>
    //                 </td>
    //                 <td></td>
    //             </tr>
    //             <tr>
    //                 <td colspan="2" style="text-align: center; background:#D61E5C; padding-bottom:30px;">

    //                     <p style="text-align:center; padding:40px; color:#000; background:#ffffff; font-size:22px;">We hope this message finds you well. Thank you for choosing Future Lift for your career counseling needs. We are thrilled to assist you on your journey to asuccessful and fulfilling career.
    //                         <div style="margin-top: -30px;"><a href="" style=" background: #1fe2e2; padding:8px 20px;color:#fff;text-decoration:none; border-radius:5px; text-transform:uppercase;">learn more</a></div>
    //                     </p>


    //                 </td>
    //                 <td></td>
    //             </tr>

    //             <tr>
    //                 <td colspan="2" style="text-align: center;">
    //                     <h1 style="text-align: center; font-size:30px; color:#42a10b;">Payment Completed!</h1>
    //                 </td>
    //                 <td></td>
    //             </tr>
    //             <tr>
    //                 <td colspan="2" style="text-align: center;">
    //                     <h3 style="font-size:25px; margin:0px;"><img src="'.asset('assets/images/check-icon.png').'" alt="" style="width:22px"> ₹'.$amount.'</h3>
    //                 </td>
    //                 <td></td>
    //             </tr>
    //             <tr>
    //                 <td colspan="2" style="text-align: center;"><h2 style="font-size:25px;">Transaction Details</h2></td>
    //                 <td></td>
    //             </tr>

    //             <tr>
    //                 <td style="text-align: center; padding:8px; border-top:1px solid #f02266; font-family:Verdana, Geneva, Tahoma, sans-serif;"><p>Subscription Package</p></td>
    //                 <td style="text-align: center; padding:8px; border-top:1px solid #f02266; font-family:Verdana, Geneva, Tahoma, sans-serif;"><p>'.$package_name.'</p></td>

    //             </tr>
    //             <tr>
    //                 <td style="text-align: center; padding:8px; border-top:1px solid #f02266; font-family:Verdana, Geneva, Tahoma, sans-serif;"><p>Order ID</p></td>
    //                 <td style="text-align: center; padding:8px; border-top:1px solid #f02266; font-family:Verdana, Geneva, Tahoma, sans-serif;"><p>'.$order_id.'</p></td>

    //             </tr>
    //             <tr>
    //                 <td style="text-align: center; padding:8px; border-top:1px solid #f02266; border-bottom:1px solid #f02266; font-family:Verdana, Geneva, Tahoma, sans-serif;"><p>Transaction ID</p></td>
    //                 <td style="text-align: center; padding:8px; border-top:1px solid #f02266; border-bottom:1px solid #f02266; font-family:Verdana, Geneva, Tahoma, sans-serif;"><p>'.$txn_id.'</p></td>
    //             </tr>
    //             <tr>
    //                 <td style="text-align: center; padding:8px; border-top:1px solid #f02266; border-bottom:1px solid #f02266; font-family:Verdana, Geneva, Tahoma, sans-serif;"><p>Payment Date</p></td>
    //                 <td style="text-align: center; padding:8px; border-top:1px solid #f02266; border-bottom:1px solid #f02266; font-family:Verdana, Geneva, Tahoma, sans-serif;"><p>'.date('l jS F Y h:i A').'</p></td>
    //             </tr>
    //             <tr>
    //                 <td colspan="2" style="text-align: center;">
    //                     <div style=" padding:15px 50px; background: #ECF0F1; border-radius:8px; margin-top:30px;">
    //                         <p style="font-size:20px; margin: 0; font-size:30px; padding-bottom:20px;">Any queries about the Payment?</p>
    //                         <a href="'.url('/').'" style="text-decoration: none; font-size:22px; font-family:Verdana, Geneva, Tahoma, sans-serif; font-weight:700">Chat with us.</a>
    //                     </div>
    //                 </td>
    //                 <td></td>
    //             </tr>';









    //     return $html;
    // }
    public static function sessionPaymentSuccessEmailContent($name,$amount,$package_name,$order_id,$txn_id,$email,$subject){
        $data = [
            "name" => $name,
            "amount" => $amount,
            "package_name" => $package_name,
            "order_id" => $order_id,
            "txn_id" => $txn_id
        ];


        $template = 'template.payment-success-mail'; // This can be dynamic based on your logic

        $mailResponse = Mail::to($email)->send(new DynamicTemplateMail($data, $template,$subject));
        if(Mail::failures()){
            $status = "failed";
        }else{
            $status = "success";

        }
        Helpers::mailDataSave($email , $name , $subject , json_encode($data) , $status);
    }
    public static function ordinal($number) {
        $ends = array('th','st','nd','rd','th','th','th','th','th','th');
        if ((($number % 100) >= 11) && (($number%100) <= 13))
            return $number. 'th';
        else
            return $number. $ends[$number % 10];
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
    public static function getCareerLibraryLikeVoteCount($postId){
        $getCount = CareerLibraryVote::where('is_like','1')->where('post_id',$postId)->get()->count();
        return $getCount;
    }
    public static function getCareerLibraryDisLikeVoteCount($postId){
        $getCount = CareerLibraryVote::where('is_dislike','1')->where('post_id',$postId)->get()->count();
        return $getCount;
    }
    public static function getCareerLibraryDisLikeComments($postId){
        $getCount = CareerLibraryVote::select('comment')->where('is_dislike','1')->where('post_id',$postId)->get();
        return $getCount;
    }
    public static function canLike($id)
    {
        $userIp = Request::ip();
        $getData = CareerLibraryVote::where('ip_address',$userIp)->where('post_id',$id)->get()->count();

        return ($getData > 0)?false:true;
    }
    public static function base64url_encode($str) {
        return strtr(base64_encode($str), '+/', '-_');
    }
    public static function base64url_decode($base64url) {
        return base64_decode(strtr($base64url, '-_', '+/'));
    }
    public static function getsessionDataForAdvice() {
        return Futurelit_session::get();
    }
    public static function twoDateTimeHoursCalculate($date1,$date2){
        $dateDiff = intval((strtotime($date1)-strtotime($date2))/60);
        $hours = intval($dateDiff/60);
        return $hours;
    }
    public static function findMiddleDates($start_date, $end_date) {
        $start = new \DateTime($start_date);
        $end = new \DateTime($end_date);

        // Calculate the interval between the dates
        $interval = $start->diff($end);

        // Calculate the total number of days between start and end dates
        $total_days = $interval->days;

        // Determine the number of middle dates (excluding start and end dates)
        $middle_dates_count = $total_days + 2;

        // Initialize an array to store the middle dates
        $middle_dates = array();

        // Calculate the middle dates
        for ($i = 1; $i <= $middle_dates_count; $i++) {
            // Calculate the interval for each middle date
            $interval_days = round($total_days / ($middle_dates_count + 1) * $i);
            // Clone the start date and add the interval
            $middle_date = clone $start;
            $middle_date->add(new \DateInterval('P' . $interval_days . 'D'));
            // Add the middle date to the array
            $middle_dates[] = $middle_date->format('Y-m-d');
        }

        return $middle_dates;
    }
    public static function getCounselorHolidayHas($id,$date) {
        $date = date('Y-m-d',strtotime($date));
        $query = CouncelorHoliday::where('userId',$id)->get();
        $flag = false;
        $middleDates = [];
        if($query->count() > 0){
            foreach ($query as $key => $value) {
              $middleDates =  Helpers::findMiddleDates($value->start_date,$value->end_date);
              if(in_array($date,$middleDates)){
                $flag = true;
                break;
              }
            }
        }
        return $flag;
    }
    public static function getAdminSetting() {
        $data = [
            "counselor_per_session_earning_amount" => 700
        ];
        $dataEncode = json_encode($data);
        return json_decode($dataEncode);
    }
    public static function getUserSessionOwnReviewCount($userId,$sessionId){
        $count = 0;
        $data = UserSessionReview::select('overall_Impact')->where('userId',$userId)->where('session_history_table_id',$sessionId);
        if($data->get()->count() > 0){
            $data = $data->first();
            $overall_Impact = json_decode($data->overall_Impact);
            $count = (int)$overall_Impact->overall_impact_rating;
        }
        return $count;
    }
    public static function getPerviousCounsellingIsReview($userId,$package_id){
        $flag = true;
        $session = SessionHistory::where('package_status','active')->where('userId',$userId)->where('package_id',$package_id)->where('status','Completed')->get();
        if($session->count() > 0){
            foreach ($session as $key => $value) {
                if($value->is_review == 'no'){
                    $flag = false;
                    break;
                }
            }
        }
        return $flag;
    }
    public static function getIdByLanguageName($id){
        $name = "";
        $data = LanguageModel::find($id);
        if($data){
            $name = $data->name;
        }
        return $name;
    }
    public static function userRegistrationFreeSubscription($userId){
        $counseli = CounsellingPrice::select('id')->where('session_count',0)->first();
        $subId = $counseli->id;
        $user_subcription = new UserSubscriptionModel();
        $user_subcription->userId = $userId;
        $user_subcription->package_id = $subId;
        $user_subcription->save();

        $getCoun = CounsellingPrice::find($subId);

        if($getCoun->session_count > 0){
            for ($i=0; $i < $getCoun->session_count; $i++){
                $sesion_history = new SessionHistory();
                $sesion_history->userId = $userId;
                $sesion_history->package_id = $subId;
                $sesion_history->status = ($i==0)?'Active':'Pending';
                $sesion_history->save();
            }

        }
        return true;
    }
    /*
    * @param1 : Plain String
    * @param2 : Working key provided by CCAvenue
    * @return : Decrypted String
    */
    public static function encrypt($plainText,$key)
    {
        $key = Helpers::hextobin(md5($key));
        $initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
        $openMode = openssl_encrypt($plainText, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $initVector);
        $encryptedText = bin2hex($openMode);
        return $encryptedText;
    }
    /*
    * @param1 : Encrypted String
    * @param2 : Working key provided by CCAvenue
    * @return : Plain String
    */
    public static function decrypt($encryptedText,$key)
    {
        $key = Helpers::hextobin(md5($key));
        $initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
        $encryptedText = Helpers::hextobin($encryptedText);
        $decryptedText = openssl_decrypt($encryptedText, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $initVector);
        return $decryptedText;
    }

    public static function hextobin($hexString)
    {
        $length = strlen($hexString);
        $binString="";
        $count=0;
        while($count<$length)
        {
            $subString =substr($hexString,$count,2);
            $packedString = pack("H*",$subString);
            if ($count==0)
            {
                $binString=$packedString;
            }

            else
            {
                $binString.=$packedString;
            }

            $count+=2;
        }
            return $binString;
    }
    public static function ccAvenuePaymentConfig(){
        $data = [
            "WORKING_KEY" => "0B6CF09892781A68E4438F4927AC8B5C",
            "ACCESS_CODE" => "AVJP69LC68AW89PJWA",
            "MERCHANT_ID" => "3370960"
        ];
        return json_encode($data);
    }
    public static function ccAvenuePaymentFunction($data){
        $payment_config = json_decode(Helpers::ccAvenuePaymentConfig());
        $working_key=$payment_config->WORKING_KEY;//Shared by CCAVENUES
	    $access_code=$payment_config->ACCESS_CODE;//Shared by CCAVENUES
	    $merchant_data='';
        foreach ($data as $key => $value){
            $merchant_data.=$key.'='.$value.'&';
        }
        $encrypted_data=Helpers::encrypt($merchant_data,$working_key);
        ?>

        <!-- <iframe src="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction&encRequest=<?=$encrypted_data?>&access_code=<?=$access_code?>" id="paymentFrame" width="100%" height="800"  frameborder="0" scrolling="yes" ></iframe> -->
        <script>
                window.location.href="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction&encRequest=<?=$encrypted_data?>&access_code=<?=$access_code?>";
        </script>
        <?php
    }

}
?>
