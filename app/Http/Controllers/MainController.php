<?php
namespace App\Http\Controllers;
use Intervention\Image\ImageManagerStatic as Image;
use Intervention\Image\File;
use App\Http\Requests\ContactRequest;
use App\Commands\CreateContactCommand;

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

    public function contact()
    {
        return view('main.contact');
    }

    public function postContact(ContactRequest $request)
    {

        $this->dispatch(
            new CreateContactCommand($request->all())
        );
        return view('main.success');
    }

    public function membership()
    {
        return view('main.membership');
    }

    public function scholarships()
    {
        return view('main.scholarships');
    }


    public function success()
    {
        return view('main.success');
    }

    public function photos()
    {

        $mixer = glob("img/events/bben_mixer/*.{jpg,JPG}", GLOB_BRACE);
        $dd2015 = glob("img/events/diversityday/*.{jpg,JPG}", GLOB_BRACE);
        $epic2015 = glob("img/events/epic2015/*.{jpg,JPG}", GLOB_BRACE);
        $wict2015 = glob("img/events/wict2015/*.{jpg,JPG}", GLOB_BRACE);
        $chapter2015 = glob("img/events/chapter2015/*.{jpg,JPG}", GLOB_BRACE);
        $rookie = glob("img/events/rookie/*.{jpg,JPG}", GLOB_BRACE);

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

        foreach($epic2015 as $file)
        {


            if (! file_exists(dirname($file)."/thumb/".basename($file)))
            {
                $img = Image::make($file)->resize(200, 200);
                $img->save($img->dirname. "/thumb/" . $img->filename. "." .$img->extension);
            }


        }

        foreach($wict2015 as $file)
        {


            if (! file_exists(dirname($file)."/thumb/".basename($file)))
            {
                $img = Image::make($file)->resize(200, 200);
                $img->save($img->dirname. "/thumb/" . $img->filename. "." .$img->extension);
            }


        }

        foreach($chapter2015 as $file)
        {


            if (! file_exists(dirname($file)."/thumb/".basename($file)))
            {
                $img = Image::make($file)->resize(200, 200);
                $img->save($img->dirname. "/thumb/" . $img->filename. "." .$img->extension);
            }


        }

        foreach($rookie as $file)
        {


            if (! file_exists(dirname($file)."/thumb/".basename($file)))
            {
                $img = Image::make($file)->resize(200, 200);
                $img->save($img->dirname. "/thumb/" . $img->filename. "." .$img->extension);
            }


        }



        return view('main.photos', compact('mixer','dd2015','epic2015','wict2015','chapter2015','rookie'));
    }

    /**
     *
     * return from paypal donation
     */




}