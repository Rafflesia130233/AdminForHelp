<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Ongoingproject;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;

class OngoingprojectsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$ongoingprojects = Ongoingproject::latest()->get();
		return view('admin.ongoingprojects.index', compact('ongoingprojects'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.ongoingprojects.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

	    $ongoingproject= new Ongoingproject($request->except(''));
		
		$ongoingproject->save();
		return redirect('admin/ongoingprojects')->with('success', Lang::get('message.success.create'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$ongoingproject = Ongoingproject::findOrFail($id);
		return view('admin.ongoingprojects.show', compact('ongoingproject'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$ongoingproject = Ongoingproject::findOrFail($id);
		return view('admin.ongoingprojects.edit', compact('ongoingproject'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
		$ongoingproject = Ongoingproject::findOrFail($id);

		

		
		$ongoingproject->update($request->except(''));
		return redirect('admin/ongoingprojects')->with('success', Lang::get('message.success.update'));
	}

	/**
    	 * Delete confirmation for the given Ongoingproject.
    	 *
    	 * @param  int      $id
    	 * @return View
    	 */
    	public function getModalDelete($id = null)
    	{
            $error = '';
            $model = '';
            $confirm_route =  route('admin.ongoingprojects.delete',['id'=>$id]);
            return View('admin/layouts/modal_confirmation', compact('error','model', 'confirm_route'));

    	}

    	/**
    	 * Delete the given Ongoingproject.
    	 *
    	 * @param  int      $id
    	 * @return Redirect
    	 */
    	public function getDelete($id = null)
    	{
    		$ongoingproject = Ongoingproject::destroy($id);

            // Redirect to the group management page
            return redirect('admin/ongoingprojects')->with('success', Lang::get('message.success.delete'));

    	}

}