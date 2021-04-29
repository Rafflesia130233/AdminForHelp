<?php

namespace App\Http\Controllers;

use App\Casestudy;
use App\Http\Requests;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Response;
use Sentinel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;
use \View as View;



class FrontendCasestudyController extends JoshController
{


    public function index()
    {
        // Grab all the blogs
        //$membernetworks = Membernetwork::latest()->simplePaginate(1);
        //$membernetworks->setPath('membernetworks');
        $casestudies = Casestudy::all();
        // return view('membernetworks', compact('membernetworks'));
        // Show the page
        //return view('membernetworks');
        return View('casestudy')->with('casestudies', $casestudies);

    }


    /**
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function getOngoingproject($slug = '')
    {
        if ($slug == '') {
            $casestudy = Casestudy::first();
        }
        try {
            $casestudy = Casestudy::findBySlugOrIdOrFail($slug);
            $casestudy->increment('views');
        } catch (ModelNotFoundException $e) {
            return Response::view('404', array(), 404);
        }
        //return view::make('home', ['name' => $name]);
        // Show the page
        //return view('membernetworks');
        return View('casestudy')->with('casestudies', $casestudy);

    }



}
