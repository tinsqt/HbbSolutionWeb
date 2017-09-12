<?php

namespace App\Http\Controllers;

use App\Models\Approach;
use App\Models\BlogPress;
use App\Models\Client;
use App\Models\FeaturedProject;
use App\Models\Service;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getIndex()
    {
        $this->getLanguage();
        $clients = Client::all();
        $sevices = Service::all();
        $featured_projects = FeaturedProject::all();
        $approachs = Approach::all();
        $blogs = DB::table('blog_press')->join('service','blog_press.id_service','=','service.id')
            ->where('type',1)
            ->select('blog_press.*','service.abbreviate')
            ->first();
        $press = DB::table('blog_press')->join('service','blog_press.id_service','=','service.id')
            ->where('type',0)
            ->select('blog_press.*','service.abbreviate')
            ->first();
        return view('page/home',[
            'clients'=>$clients,
            'sevices'=>$sevices,
            'featured_projects'=>$featured_projects,
            'approachs'=>$approachs,
            'blogs'=>$blogs,
            'press'=>$press,
        ]);
    }
    public function getLanguage()
    {
        if(Session::has('locale')) {
            App::setLocale(Session::get('locale'));
        }
        else {
            Session::put('locale','vi');
        }
    }
    public function SetLanguage($locale)
    {
        Session::put('locale',$locale);
        return redirect()->back();
    }
    public function getPageProduct()
    {
        return view('page.products');
    }
    public function getPageService(){
        return view('page.services');
    }
    public function getPageClient() {
        return view('page.clients');
    }
    public function getPageAbout() {
        return view('page.about');
    }
    public function getPageContact() {
        return view('page.contact');
    }

}
