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
    	$html .= '<table width="100%" style="background-color: #5a5a5a;color:white;">';
    	$html .= 	'<tr>';
    	$html .= 		'<td style="padding: 55px;"><h1>FutureLift</h1></td>';
    	$html .= 	'</tr>';
    	$html .= '</table>';

    	return $html;
    }
    public static function mailFooter(){
    	$html = '';
    	$html .= '<div style="background-color: #5a5a5a;color:white;padding:55px;width:100%;">';
    	$html .= 	'<table  style="width:100%;">';
    	$html .= 		'<tr>';
    	$html .= 			'<td style="float:left;"><h3>Contact Us</h3></td>';
    	$html .= 			'<td style="float:right;"><a href="#"><img src="'.asset('/assets/img/mail_logo.png').'"></a></td>';
    	$html .= 		'</tr>';
    	$html .= 		'<tr>';
    	$html .= 			'<td style="float:left;"><p>Email : admin@gmail.com</h3></p>';
    	$html .= 		'</tr>';
    	$html .= 		'<tr>';
    	$html .= 			'<td style="float:left;"><p>Phone Number : 9876543210</h3></p>';
    	$html .= 		'</tr>';
    	$html .= 		'<tr>';
    	$html .= 			'<td style="text-align:center"><p>copy right @2023</h3></p>';
    	$html .= 		'</tr>';
    	$html .= 	'</table>';
    	$html .= '</div>';

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
        $story_desc = substr($story_desc, 0, $chars)." <a href='javascript:void(0)' data-toggle='modal' data-target='#".$modalId."' id='readmore".$modalId."'>Read More...</a>";
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

}
?>
