<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Terms()
    {
        return view('front.pages.terms');
    } //End Method

    public function PrivacyPolicy()
    {
        return view('front.pages.privacy_policy');
    } //End Method

    public function AboutUs()
    {
        return view('front.pages.about');
    } //End Method

    public function ContactUs()
    {
        return view('front.pages.contact');
    } //End Method

    public function Faq()
    {
        return view('front.pages.faq');
    } //End Method
}
