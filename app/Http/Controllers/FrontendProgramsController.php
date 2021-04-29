<?php

namespace App\Http\Controllers;

use App\Program;
use App\Http\Requests;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Response;
use Sentinel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;
use \View as View;



class FrontendProgramsController extends JoshController
{
    /**
     * @return \Illuminate\View\View
     */

    /**public function __construct()
    {
    parent::__construct();
    }
     */

    public function index()
    {
        // Grab all the blogs
        //$membernetworks = Membernetwork::latest()->simplePaginate(1);
        //$membernetworks->setPath('membernetworks');
        $programs = Program::all();
        // return view('membernetworks', compact('membernetworks'));
        // Show the page
        //return view('membernetworks');
        return View('research')->with('programs', $programs);


    }

    public function getHumanresourcesdevelopment()
    {

        $programs = Program::all()->where('id', 1)->first();
        return View('humanresourcesdevelopment')->with('programs', $programs);
    }
    public function getEnvironmentstabilities()
    {

        $programs = Program::all()->where('id', 2)->first();
        return View('environmentstabilities')->with('programs', $programs);
    }
    public function getLivelihood()
    {

        $programs = Program::all()->where('id', 3)->first();
        return View('livelihood')->with('programs', $programs);
    }
    public function getClimatechangedisasterriskreduction()
    {

        $programs = Program::all()->where('id', 4)->first();
        return View('climatechangedisasterriskreduction')->with('programs', $programs);
    }

    /**
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function getMembernetwork($slug = '')
    {
        if ($slug == '') {
            $program = Program::first();
        }
        try {
            $program = Program::findBySlugOrIdOrFail($slug);
            $program->increment('views');
        } catch (ModelNotFoundException $e) {
            return Response::view('404', array(), 404);
        }
        //return view::make('home', ['name' => $name]);
        // Show the page
        //return view('membernetworks');
        return View('programs')->with('programs', $program);

    }



}
