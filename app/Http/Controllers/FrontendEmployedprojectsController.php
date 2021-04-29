<?php

namespace App\Http\Controllers;

use App\Employedproject;
use App\Http\Requests;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Response;
use Sentinel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;
use \View as View;



class FrontendEmployedprojectsController extends JoshController
{


    public function index()
    {
        // Grab all the blogs
        //$membernetworks = Membernetwork::latest()->simplePaginate(1);
        //$membernetworks->setPath('membernetworks');
        $employedprojects = Employedproject::all();
        // return view('membernetworks', compact('membernetworks'));
        // Show the page
        //return view('membernetworks');
        return View('employedprojects')->with('employedprojects', $employedprojects);

    }


    /**
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function getOngoingproject($slug = '')
    {
        if ($slug == '') {
            $employedproject = Employedproject::first();
        }
        try {
            $employedproject = Employedproject::findBySlugOrIdOrFail($slug);
            $employedproject->increment('views');
        } catch (ModelNotFoundException $e) {
            return Response::view('404', array(), 404);
        }
        //return view::make('home', ['name' => $name]);
        // Show the page
        //return view('membernetworks');
        return View('employedprojects')->with('employedprojects', $employedproject);

    }



}
