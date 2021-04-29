<?php

namespace App\Http\Controllers;

use App\Publication;
use App\Http\Requests;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Response;
use Sentinel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;
use \View as View;



class FrontendPublicationController extends JoshController
{


    public function index()
    {
        // Grab all the blogs
        //$membernetworks = Membernetwork::latest()->simplePaginate(1);
        //$membernetworks->setPath('membernetworks');
        $publications = Publication::all();
        // return view('membernetworks', compact('membernetworks'));
        // Show the page
        //return view('membernetworks');
        return View('publications')->with('publications', $publications);

    }


    /**
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function getPublication($slug = '')
    {
        if ($slug == '') {
            $publication = Publication::first();
        }
        try {
            $publication = Publication::findBySlugOrIdOrFail($slug);
            $publication->increment('views');
        } catch (ModelNotFoundException $e) {
            return Response::view('404', array(), 404);
        }
        //return view::make('home', ['name' => $name]);
        // Show the page
        //return view('membernetworks');
        return View('publications')->with('publications', $publication);

    }



}
