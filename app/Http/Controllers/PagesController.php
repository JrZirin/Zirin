<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Zirin Labs, The Leading IT Firm';
        //return view('pages.index',compact('title'));
        return view('pages.index')->with('title', $title);

    }
    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'services',
            'services' => ['Web Development','programming','SEO']
        );
        return view('pages.services')->with($data);
    }

    public function webHosting(){
        $title = 'Web Hosting';
        return view('pages.webhosting')->with('title', $title);
    }

    public function contactUs(){

            return view('pages.contactUs');
    }

    public function webDevelopmentServices() {
            return view('pages.webDevelopmentServices');
    }

    public function privacyPolicy(){
            return view('pages.privacyPolicy');
    }

    public function mvp(){
        return view('pages.mvp');
    }

    public function repair(){
        return view('pages.repair');
    }

    public function laraveldev(){
        return view('pages.laraveldev');
    }

    public function html5(){
        return view('pages.html5');
    }
    public function termsOfUse(){
        return view('pages.termsOfUse');
    }
    public function faq(){
        return view('pages.faq');
    }
    public function reportAbuse(){
        return view('pages.reportAbuse');
    }



}
