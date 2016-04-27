<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about() {

        return view('pages/about');
    }

    public function contact() {

        return view('pages/contact');
    }

    public function mail(Request $request) {
        $to = "kevelberger@gmail.com";
        $subject = $request['name'];
        $message = $request['message'];
        mail($to,$subject,$message);

        return redirect()->back();
    }
}