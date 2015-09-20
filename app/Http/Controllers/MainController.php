<?php
namespace App\Http\Controllers;
use Intervention\Image\ImageManagerStatic as Image;
use Intervention\Image\File;

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

    public function epicAwards()
    {
        return view('main.epic');
    }

    public function unplugged()
    {
        return view('main.unplugged');
    }

    public function issue1()
    {
        return view('unplugged.issue1');
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

        $mixer = glob("img/events/bben_mixer/*.{jpg,JPG}", GLOB_BRACE);
        $dd2015 = glob("img/events/diversityday/*.{jpg,JPG}", GLOB_BRACE);

        foreach($mixer as $file)
        {


            if (! file_exists(dirname($file)."/thumb/".basename($file)))
            {
                $img = Image::make($file)->resize(200, 200);
                $img->save($img->dirname. "/thumb/" . $img->filename. "." .$img->extension);
            }


        }

        foreach($dd2015 as $file)
        {


            if (! file_exists(dirname($file)."/thumb/".basename($file)))
            {
                $img = Image::make($file)->resize(200, 200);
                $img->save($img->dirname. "/thumb/" . $img->filename. "." .$img->extension);
            }


        }

        return view('main.photos', compact('mixer','dd2015'));
    }

    /**
     *
     * return from paypal donation
     */
    public function success()
    {
        return view('main.success');
    }



}