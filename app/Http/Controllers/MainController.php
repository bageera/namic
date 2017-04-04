<?php
namespace App\Http\Controllers;
use Intervention\Image\ImageManagerStatic as Image;
use Intervention\Image\File;
use App\Http\Requests\ContactRequest;
use App\Commands\CreateContactCommand;
use GrahamCampbell\Flysystem\Facades\Flysystem;

use League\Flysystem\Filesystem;
use Dropbox\Client;
use League\Flysystem\Dropbox\DropboxAdapter as Adapter;
use League\Flysystem\Adapter\Local;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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

    public function mentor()
    {

        return view('main.mentor');
    }

    public function scholarships()
    {
        return view('main.scholarships');
    }


    public function success()
    {
        return view('main.success');
    }

    public function volunteer()
    {
        return view('main.volunteer');
    }

    public function photos()
    {

        //Demo of pulling images from dropbox and having it integrated into the site
        // creating the adapter
        $client = new Client(env('DROPBOX_TOKEN'), env('DROPBOX_APP'));
        $filesystem = new Filesystem(new Adapter($client, 'Head Shots/Web Prod'));


        $contents =  $filesystem->listContents(null,true);
        $this->processDropbox($contents);
        //dd($contents);



        $mixer = glob("img/events/bben_mixer/*.{jpg,JPG}", GLOB_BRACE);
        $rookie = glob("img/events/rookie/*.{jpg,JPG}", GLOB_BRACE);
        $epic2016 = glob("img/events/epic2016/*.{jpg,JPG}", GLOB_BRACE);
        $wict2017 = glob("img/events/wict2017/*.{jpg,JPG}", GLOB_BRACE);
        foreach($mixer as $file)
        {


            if (! file_exists(dirname($file)."/thumb/".basename($file)))
            {
                $img = Image::make($file)->resize(200, 200);
                $img->save($img->dirname. "/thumb/" . $img->filename. "." .$img->extension);
            }


        }


        foreach($epic2016 as $file)
        {


            if (! file_exists(dirname($file)."/thumb/".basename($file)))
            {
                $img = Image::make($file)->resize(200, 200);
                $img->save($img->dirname. "/thumb/" . $img->filename. "." .$img->extension);
            }


        }



        foreach($wict2017 as $file)
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



        return view('main.photos', compact('mixer','epic2016','rookie','wict2017','contents'));
    }

    /**
     *
     * process links from dropbox
     * @param  Array
     * @return void
     */

    public function processDropbox($contents)
    {
        $client = new Client(env('DROPBOX_TOKEN'), env('DROPBOX_APP'));
        $dbfs = new Filesystem(new Adapter($client, 'Head Shots/Web Prod'));


        $basepath = public_path('img/events/');
        //dd(Storage::disk('local'));
        $adapter = new Local(public_path(), 0);
        $filesystem = new Filesystem($adapter);
        // loop through content and verify or generate thumb image
        foreach($contents as $element)
        {
            //if element is a directory verify path exists or create it
            if ($element["type"] == "dir")
            {

                //if diretory doesn't exists create directory
                if (! $filesystem->has($basepath . Str::lower($element["path"])))
                {
                    $dpath = $basepath . Str::lower($element["path"]);
                    //dd($dpath);
                    $filesystem->createDir($dpath);
                    $filesystem->createDir($dpath . '/thumb');
                }

            }

            if ($element["type"] == "file")
            {

                if (! $filesystem->has($basepath . Str::lower($element["dirname"]) . '/thumb/' . Str::lower($element["basename"])))
                {
                    //dd("create a thumb");


                    //$img = Image::make($dbfs->get($element["path"]))->resize(200, 200);
                    //$img->save($basepath . Str::lower($element["dirname"]) . '/thumb/' . Str::lower($element["basename"]), $img->stream());
                }

            }

        }
    }




}