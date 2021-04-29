<?php

namespace App\Http\Controllers;

use App\Ongoingproject;
use App\Http\Requests;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Response;
use Sentinel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;
use \View as View;



class FrontendOngoingprojectsController extends JoshController
{


    public function index()
    {
        // Grab all the blogs
        //$membernetworks = Membernetwork::latest()->simplePaginate(1);
        //$membernetworks->setPath('membernetworks');
        $ongoingprojects = Ongoingproject::all();
        // return view('membernetworks', compact('membernetworks'));
        // Show the page
        //return view('membernetworks');
        return View('ongoingprojects')->with('ongoingprojects', $ongoingprojects);

    }


    /**
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function getOngoingproject($slug = '')
    {
        if ($slug == '') {
            $ongoingproject = Ongoingproject::first();
        }
        try {
            $ongoingproject = Ongoingproject::findBySlugOrIdOrFail($slug);
            $ongoingproject->increment('views');
        } catch (ModelNotFoundException $e) {
            return Response::view('404', array(), 404);
        }
        //return view::make('home', ['name' => $name]);
        // Show the page
        //return view('membernetworks');
        return View('ongoingprojects')->with('ongoingprojects', $ongoingproject);

    }



}
