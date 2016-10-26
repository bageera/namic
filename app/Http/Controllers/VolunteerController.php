<?php
namespace App\Http\Controllers;


class VolunteerController extends Controller
{


    public function survey()
    {
        return view('volunteer.index');
    }

    public function store()
    {
        return view('main.index');
    }

}