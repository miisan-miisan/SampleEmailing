<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MailCount;
use Carbon\Carbon;
use App\Mail\SendTestMail;
use Illuminate\Support\Facades\Mail;

class MailSendController extends Controller
{
    public function send(){
        $todayMail = MailCount::whereDate('sending_date', Carbon::today())->first();

        if ($todayMail) {
            $todayMail->daily_mail_counts += 1;
            $todayMail->save();
        }else {
            $todayMail = MailCount::create(['daily_mail_counts' => 1 ,'sending_date' => Carbon::now()]);
        }

        Mail::send(new SendTestMail($todayMail));
    }
}
