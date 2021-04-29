<?php

namespace App\Http\Controllers;

use App\Donorandpartner;
use App\Http\Requests;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Response;
use Sentinel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;
use \View as View;



class FrontendDonorAndPartnerController extends JoshController
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
        $donorandpartners = Donorandpartner::all();
        // return view('membernetworks', compact('membernetworks'));
        // Show the page
        //return view('membernetworks');
        return View('donorandpartners')->with('donorandpartners', $donorandpartners);

    }


    /**
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function getDonorandpartner($slug = '')
    {
        if ($slug == '') {
            $donorandpartner = Donorandpartner::first();
        }
        try {
            $donorandpartner = Donorandpartner::findBySlugOrIdOrFail($slug);
            $donorandpartner->increment('views');
        } catch (ModelNotFoundException $e) {
            return Response::view('404', array(), 404);
        }
        //return view::make('home', ['name' => $name]);
        // Show the page
        //return view('membernetworks');
        return View('donorandpartners')->with('donorandpartners', $donorandpartner);

    }



}
