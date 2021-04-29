<?php

namespace App\Http\Controllers;

use App\Boardofadvisor;
use App\Http\Requests;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Response;
use Sentinel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;
use \View as View;



class FrontendBoardofdirectorController extends JoshController
{


    public function index()
    {
        // Grab all the blogs
        //$membernetworks = Membernetwork::latest()->simplePaginate(1);
        //$membernetworks->setPath('membernetworks');
        $boardofadvisors = Boardofadvisor::all();
        // return view('membernetworks', compact('membernetworks'));
        // Show the page
        //return view('membernetworks');
        return View('boardofadvisor')->with('boardofadvisors', $boardofadvisors);

    }


    /**
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function getBoardofadvisor($slug = '')
    {
        if ($slug == '') {
            $boardofadvisor = Boardofadvisor::first();
        }
        try {
            $boardofadvisor = Boardofadvisor::findBySlugOrIdOrFail($slug);
            $boardofadvisor->increment('views');
        } catch (ModelNotFoundException $e) {
            return Response::view('404', array(), 404);
        }
        //return view::make('home', ['name' => $name]);
        // Show the page
        //return view('membernetworks');
        return View('boardofadvisor')->with('boardofadvisors', $boardofadvisor);

    }



}
