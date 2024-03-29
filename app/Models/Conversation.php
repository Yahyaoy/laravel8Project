<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;

public function setBestReply(Reply $reply){
    $this->best_reply_id = $reply->id;
    $this->save();
}
    public function replies(){
        return $this->hasMany(Reply::class);
    }

public function user(){
    return $this->belongsTo(User::class);
}


}
