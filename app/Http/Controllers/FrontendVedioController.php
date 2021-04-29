<?php

namespace App\Http\Controllers;

use App\Vedio;
use App\Http\Requests;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Response;
use Sentinel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;
use \View as View;



class FrontendVedioController extends JoshController
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
        $vedios = Vedio::all();
        // return view('membernetworks', compact('membernetworks'));
        // Show the page
        //return view('membernetworks');
        return View('vedios')->with('vedios', $vedios);


    }


    /**
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function getImage($slug = '')
    {
        if ($slug == '') {
            $vedio = Vedio::first();
        }
        try {
            $vedio = Vedio::findBySlugOrIdOrFail($slug);
            $vedio->increment('views');
        } catch (ModelNotFoundException $e) {
            return Response::view('404', array(), 404);
        }
        //return view::make('home', ['name' => $name]);
        // Show the page
        //return view('membernetworks');
        return View('vedios')->with('vedios', $vedio);

    }



}
