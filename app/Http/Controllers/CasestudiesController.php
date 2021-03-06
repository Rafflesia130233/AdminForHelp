<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Casestudy;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;

class CasestudiesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$casestudies = Casestudy::latest()->get();
		return view('admin.casestudies.index', compact('casestudies'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.casestudies.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

	    $casestudy= new Casestudy($request->except(''));
		
		$casestudy->save();
		return redirect('admin/casestudies')->with('success', Lang::get('message.success.create'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$casestudy = Casestudy::findOrFail($id);
		return view('admin.casestudies.show', compact('casestudy'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$casestudy = Casestudy::findOrFail($id);
		return view('admin.casestudies.edit', compact('casestudy'));
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
		$casestudy = Casestudy::findOrFail($id);

		

		
		$casestudy->update($request->except(''));
		return redirect('admin/casestudies')->with('success', Lang::get('message.success.update'));
	}

	/**
    	 * Delete confirmation for the given Casestudy.
    	 *
    	 * @param  int      $id
    	 * @return View
    	 */
    	public function getModalDelete($id = null)
    	{
            $error = '';
            $model = '';
            $confirm_route =  route('admin.casestudies.delete',['id'=>$id]);
            return View('admin/layouts/modal_confirmation', compact('error','model', 'confirm_route'));

    	}

    	/**
    	 * Delete the given Casestudy.
    	 *
    	 * @param  int      $id
    	 * @return Redirect
    	 */
    	public function getDelete($id = null)
    	{
    		$casestudy = Casestudy::destroy($id);

            // Redirect to the group management page
            return redirect('admin/casestudies')->with('success', Lang::get('message.success.delete'));

    	}

}