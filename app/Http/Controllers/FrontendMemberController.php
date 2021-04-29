<?php

namespace App\Http\Controllers;

use App\Member;
use App\Http\Requests;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Response;
use Sentinel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;
use \View as View;



class FrontendMemberController extends JoshController
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
        $members = Member::all();
        // return view('membernetworks', compact('membernetworks'));
        // Show the page
        //return view('membernetworks');
        return View('member')->with('members', $members);


    }

    /**
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function getMember($slug = '')
    {
        if ($slug == '') {
            $member = Member::first();
        }
        try {
            $member = Member::findBySlugOrIdOrFail($slug);
            $member->increment('views');
        } catch (ModelNotFoundException $e) {
            return Response::view('404', array(), 404);
        }
        //return view::make('home', ['name' => $name]);
        // Show the page
        //return view('membernetworks');
        return View('member')->with('members', $member);

    }



}
