<?php

namespace App\Http\Controllers\Home;

use App\Http\Requests\ContactMeRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function showForm()
    {
//        dd(1);
        return view('home.contact');
    }

    public function sendContactInfo(ContactMeRequest $request)
    {
        $data = $request->only('name', 'email', 'phone');
        $data['messageLines'] = explode("\n", $request->get('message'));

//        Mail::to($data['email'])->send(new ContactMail($data));

//        将邮件发送任务推送到队列  可以知道队列有几个任务
        Mail::to($data['email'])->queue(new ContactMail($data));

        return back()->with("success", "消息已发送，感谢您的反馈！");
    }
}
