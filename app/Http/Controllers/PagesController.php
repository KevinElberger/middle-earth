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

    /**
     * Retrieves profile view for selected user.
     *
     * @param $name
     * @return \Illuminate\View\View
     */
    public function user($idNum) {
        $user = \App\User::where(['id' => $idNum])->get()->first();


        $url = 'http://www.gravatar.com/avatar/';
        $url .= md5( strtolower(trim($user['email'])));
        $url .= "?s=80&d=mm&r=g";

        return view('pages/profile', compact('user', 'url'));
    }
}