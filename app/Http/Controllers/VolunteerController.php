<?php
namespace App\Http\Controllers;

use App\Http\Requests\AmbassadorRequest;
use App\Commands\CreateAmbassadorSurveyCommand;

class VolunteerController extends Controller
{


    public function survey()
    {
        return view('volunteer.index');
    }

    public function store(AmbassadorRequest $request)
    {
        $this->dispatch(
            new CreateAmbassadorSurveyCommand($request->all())
        );

        return view('main.success');
    }

}