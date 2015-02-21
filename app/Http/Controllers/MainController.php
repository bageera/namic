<?php
namespace App\Http\Controllers;

class MainController extends Controller
{

    public function index()
    {
        return view('main.index');
    }

    public function chapter()
    {
        return view('main.chapter');
    }

    public function events()
    {
        return view('main.events');
    }

    public function unplugged()
    {
        return view('main.unplugged');
    }

    public function membership()
    {
        return view('main.membership');
    }

    public function scholarships()
    {
        return view('main.scholarships');
    }

    public function photos()
    {
        return view('main.photos');
    }

}