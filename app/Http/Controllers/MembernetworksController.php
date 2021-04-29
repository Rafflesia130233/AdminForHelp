<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Membernetwork;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;

class MembernetworksController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$membernetworks = Membernetwork::all();
		return view('admin.membernetworks.index', compact('membernetworks'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.membernetworks.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

	    $membernetwork= new Membernetwork($request->except(''));
		
		$membernetwork->save();
		return redirect('admin/membernetworks')->with('success', Lang::get('message.success.create'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$membernetwork = Membernetwork::findOrFail($id);
		return view('admin.membernetworks.show', compact('membernetwork'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$membernetwork = Membernetwork::findOrFail($id);
		return view('admin.membernetworks.edit', compact('membernetwork'));
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
		$membernetwork = Membernetwork::findOrFail($id);

		

		
		$membernetwork->update($request->except(''));
		return redirect('admin/membernetworks')->with('success', Lang::get('message.success.update'));
	}

	/**
    	 * Delete confirmation for the given Membernetwork.
    	 *
    	 * @param  int      $id
    	 * @return View
    	 */
    	public function getModalDelete($id = null)
    	{
            $error = '';
            $model = '';
            $confirm_route =  route('admin.membernetworks.delete',['id'=>$id]);
            return View('admin/layouts/modal_confirmation', compact('error','model', 'confirm_route'));

    	}

    	/**
    	 * Delete the given Membernetwork.
    	 *
    	 * @param  int      $id
    	 * @return Redirect
    	 */
    	public function getDelete($id = null)
    	{
    		$membernetwork = Membernetwork::destroy($id);

            // Redirect to the group management page
            return redirect('admin/membernetworks')->with('success', Lang::get('message.success.delete'));

    	}

}