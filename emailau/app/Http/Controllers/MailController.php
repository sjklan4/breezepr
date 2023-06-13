<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function rgemail() {
        return view('EmailRegist');
    }

    public function rgmailpost(Request $req) {
        // return var_dump($req->mailAddress);
        Mail::to($req->mailAddress)->send(new OrderShipped($req->mailAddress));

        return '메일을 확인해 주세요';
        // return redirect()->back()->with('success', '메일 전송 완료');
    }
}