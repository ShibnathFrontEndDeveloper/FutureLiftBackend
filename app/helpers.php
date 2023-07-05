<?php
namespace App;
/**
 *
 */
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Futurelit_session;
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
    	$html .= 		'<td style="padding: 55px;"><h1>Book My Smoke</h1></td>';
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
    	$html .= 			'<td style="text-align:center"><p>copy right @2022</h3></p>';
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

}
?>
