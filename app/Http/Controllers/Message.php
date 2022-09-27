<?php

namespace App\Http\Controllers;

use App\Events\NewMessage;
use Illuminate\Http\Request;

class Message extends Controller
{
   public function sendmessage(){
       $data=[
           'massage'=>'srhan is the man that he will becam the king of its in the fucking world'
       ];
       event(new NewMessage($data));
   }
}
