<?php

namespace App\Http\Controllers;
class PagesController extends Controller
{
    public function getIndex(){
        return view('pages.welcome');
    }

    public function getAbout(){
        $firstName = 'sunil';
        $lastName = 'lim';
        $full = $firstName.' '.$lastName;
        $email = 'xxyy';
        return view('pages.about')->with('fullName',$full)->with('email',$email);
    }

    public function getContact(){
        return view('pages.contact');
    }
}