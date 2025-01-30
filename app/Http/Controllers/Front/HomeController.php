<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\About;
use App\Models\Admin\Achievement;
use App\Models\Admin\Category;
use App\Models\Admin\Cms;
use App\Models\Admin\Contactus;
use App\Models\Admin\Des;
use App\Models\Admin\Meta;
use App\Models\Admin\OurClient;
use App\Models\Admin\Ourwork;
use App\Models\Admin\Slider;
use App\Models\Admin\SocialMedia;
use App\Models\SliderSetting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {

        return view('front.index');
//        $sliders = Slider::all();
//        $slider_setting = SliderSetting::first();
//        $about = About::first();
//        $our_works = Ourwork::all();
//        $des = Des::first();
//        $category = Category::with('services')->get();
//        $achievement = Achievement::first();
//        $website_meta = Meta::first();

//        $clients = OurClient::all();
//        return view('front.home' , [
//            'sliders'          => $sliders,
//            'slider_setting'   => $slider_setting ,
//            'about'            => $about ,
//            'our_works'        => $our_works,
//            'des'              => $des,
//            'category'         => $category,
//            'achievement'      => $achievement,
//            'clients'          =>$clients,
//            'meta'             =>$website_meta
//        ]);


    }

    public function about(){
        $about = About::first();
        return view('front.about' , compact('about'));
    }

    public function projects(){
        $projects = Ourwork::all();
        return view('front.projcets' , compact('projects'));
    }

    public function articles(){
        $articles = Cms::orderBy('created_at', 'desc')->paginate(6); // Adjust the number as needed
        return view('front.blog', compact('articles'));
    }

    public function article_details($slug){
        $article = Cms::whereHas('translations', function ($q) use ($slug) {
            $q->where('slug', 'like', '%' . $slug . '%');
        })->first();
        $articles = Cms::orderBy('created_at', 'desc')->take(5)->get();
        return view('front.blog_details' , compact('article' , 'articles'));
    }

}
