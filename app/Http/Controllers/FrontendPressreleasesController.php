<?php

namespace App\Http\Controllers;

use App\Pressrelease;
use App\Http\Requests;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Response;
use Sentinel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;
use \View as View;



class FrontendPressreleasesController extends JoshController
{


    public function index()
    {
        // Grab all the blogs
        //$membernetworks = Membernetwork::latest()->simplePaginate(1);
        //$membernetworks->setPath('membernetworks');
        $pressreleases = Pressrelease::all();
        // return view('membernetworks', compact('membernetworks'));
        // Show the page
        //return view('membernetworks');
        return View('pressrelease')->with('pressreleases', $pressreleases);

    }


    /**
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function getPressrelease($slug = '')
    {
        if ($slug == '') {
            $pressrelease = Pressrelease::first();
        }
        try {
            $pressrelease = Pressrelease::findBySlugOrIdOrFail($slug);
            $pressrelease->increment('views');
        } catch (ModelNotFoundException $e) {
            return Response::view('404', array(), 404);
        }
        //return view::make('home', ['name' => $name]);
        // Show the page
        //return view('membernetworks');
        return View('pressrelease')->with('pressreleases', $pressrelease);

    }



}
