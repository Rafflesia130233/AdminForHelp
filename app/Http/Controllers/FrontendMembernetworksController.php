<?php

namespace App\Http\Controllers;

use App\Membernetwork;
use App\Http\Requests;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Response;
use Sentinel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;
use \View as View;



class FrontendMembernetworksController extends JoshController
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
        $membernetworks = Membernetwork::all();
       // return view('membernetworks', compact('membernetworks'));
        // Show the page
        //return view('membernetworks');
        return View('membernetworks')->with('membernetworks', $membernetworks);


    }

    public function getTest()
    {
        // Grab all the blogs
        //$membernetworks = Membernetwork::latest()->simplePaginate(1);
        //$membernetworks->setPath('membernetworks');
       // OK --- $membernetworks = Membernetwork::all()->first();

        $membernetworks = Membernetwork::all()->where('id', 2)->first();
        // return view('membernetworks', compact('membernetworks'));
        // Show the page
        //return view('membernetworks');
        return View('Test')->with('membernetworks', $membernetworks);


    }

    /**
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function getMembernetwork($slug = '')
    {
        if ($slug == '') {
            $membernetwork = Membernetwork::first();
        }
        try {
            $membernetwork = Membernetwork::findBySlugOrIdOrFail($slug);
            $membernetwork->increment('views');
        } catch (ModelNotFoundException $e) {
            return Response::view('404', array(), 404);
        }
        //return view::make('home', ['name' => $name]);
        // Show the page
        //return view('membernetworks');
        return View('membernetworks')->with('membernetworks', $membernetwork);

    }



}
