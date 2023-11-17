<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index()
    {
        return view(view: 'front_home');
    }

    public function about()
    {
        $data['title']="About Us";
        return view(view: 'front_about',data:$data);
    }

    public function services()
    {
        $data['title']="Services";
        return view(view: 'front_services',data:$data);
    }

    public function packages()
    {
        $data['title']="Our Packages";
        return view(view: 'front_packages',data:$data);
    }

    public function contact()
    {
        $data['title']="Contact";
        return view(view: 'front_contact',data:$data);
    }

    public function desination()
    {
        $data['title']="Desiantion";
        return view(view: 'front_desination',data:$data);
    }

    public function booking()
    {
        $data['title']="booking";
        return view(view: 'front_booking',data:$data);
    }
}
