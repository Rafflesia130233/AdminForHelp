<?php

namespace App\Http\Controllers;

use App\Image;
use App\Http\Requests;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Response;
use Sentinel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;
use \View as View;



class FrontendImageController extends JoshController
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
        $images = Image::all();
        // return view('membernetworks', compact('membernetworks'));
        // Show the page
        //return view('membernetworks');
        return View('images')->with('images', $images);


    }


    /**
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function getImage($slug = '')
    {
        if ($slug == '') {
            $image = Image::first();
        }
        try {
            $image = Image::findBySlugOrIdOrFail($slug);
            $image->increment('views');
        } catch (ModelNotFoundException $e) {
            return Response::view('404', array(), 404);
        }
        //return view::make('home', ['name' => $name]);
        // Show the page
        //return view('membernetworks');
        return View('images')->with('images', $image);

    }



}
