<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class CareerLibraryVote extends Model
{
    use HasFactory;
    protected $table = "career_library_vote";
    public function canLike($id)
    {
        $userIp = Request::ip();
        $getData = CareerLibraryVote::where('ip_address',$userIp)->where('post_id',$id)->get()->count();

        return ($getData > 0)?false:true;
    }
}
