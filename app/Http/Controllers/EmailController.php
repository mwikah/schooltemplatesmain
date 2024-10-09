<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function sendEmail()
    {
        $mailInfo = new \stdClass();
        $mailInfo->recieverName = "John Defoe";
        $mailInfo->sender = "Mike";
        $mailInfo->senderCompany = "CodeInnovers Technologies";
        $mailInfo->to = "abdhassan2615@gmail.com";
        $mailInfo->subject = "Support- Team CodeInnovers";
        $mailInfo->name = "Mike";
        $mailInfo->cc = "ci@email.com";
        $mailInfo->bcc = "jim@email.com";

        Mail::to("johndefoe@email.com")
            ->send(new LaraEmail($mailInfo));
    }

}
