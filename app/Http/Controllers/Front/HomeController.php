<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\About;
use App\Models\Admin\Achievement;
use App\Models\Admin\Category;
use App\Models\Admin\Cms;
use App\Models\Admin\Contactus;
use App\Models\Admin\Des;
use App\Models\Admin\Message;
use App\Models\Admin\Meta;
use App\Models\Admin\OurClient;
use App\Models\Admin\Ourwork;
use App\Models\Admin\Product;
use App\Models\Admin\Slider;
use App\Models\Admin\SocialMedia;
use App\Models\SliderSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;


class HomeController extends Controller
{
    //
    public function index()
    {

        $sliders = Slider::all();
        $about = About::first();
        $projects = Ourwork::all();
        $articles = Cms::latest()->take(6)->get();

        return view('front.index' , compact('sliders' , 'about' , 'projects' , 'articles'));
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
        $articles = Cms::orderBy('created_at', 'desc')->paginate(12); // Adjust the number as needed
        return view('front.blog', compact('articles'));
    }

    public function article_details($slug){
        $article = Cms::whereHas('translations', function ($q) use ($slug) {
            $q->where('slug', 'like', '%' . $slug . '%');
        })->first();
        $articles = Cms::orderBy('created_at', 'desc')->take(5)->get();
        return view('front.blog_details' , compact('article' , 'articles'));
    }


    public function contact_us(){

        return view('front.contact_us');
    }


    public function save_message(Request $request){

            $request->validate([
                'name' => 'nullable|string|max:255',
                'email' => 'nullable|email|unique:users,email',
                'phone' => 'required|regex:/^01[0-2,5]{1}[0-9]{8}$/',
                'message'=>'required|string|max:2024'
            ]);

            try{

                $msg =  Message::create([
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'phone'=>$request->phone,
                    'message'=>$request->message
                ]);
               // Mail::to('muhmdhamed757@gmail.com')->send(new ContactFormSubmitted($request->all()));

                Alert::success('success' , 'تم ارسال استفسارك للإداره وسيتم التواصل معك');
               return redirect()->back();

            }catch (\Exception $e){
                dd($e->getMessage() , $e->getLine());
                Alert::success('success' , ' حدثت مشكله ـ من فضلك حاول مره أخري');
                return redirect()->back();
            }


    } // save message form contacts


    public function products(){
        $paginate_products = Product::with('gallery')->orderBy('created_at', 'desc')->paginate(12);
        return view('front.products' , compact('paginate_products'));
    }

    public function product_details($slug)
    {
        $product = Product::whereHas('translations', function ($q) use ($slug) {
            $q->where('slug', $slug);
        })->first();


        if ($product) {
            return view('front.product_details', compact('product'));
        }

        abort(404);
    }





}
