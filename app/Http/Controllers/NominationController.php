<?php
namespace App\Http\Controllers;
use App\Http\Requests\CreateNomination;
use App\Commands\CreateNominationCommand;

class NominationController extends Controller
{


    public function create()
    {
        return view('epic.create');
    }

    public function store(CreateNomination $request)
    {

        $this->dispatch(
          new CreateNominationCommand($request->all())
        );

    }

}