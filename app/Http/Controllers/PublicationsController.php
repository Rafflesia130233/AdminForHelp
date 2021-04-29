<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Publication;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;

class PublicationsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$publications = Publication::latest()->get();
		return view('admin.publications.index', compact('publications'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.publications.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

	    $publication= new Publication($request->except(''));
		
		$publication->save();
		return redirect('admin/publications')->with('success', Lang::get('message.success.create'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$publication = Publication::findOrFail($id);
		return view('admin.publications.show', compact('publication'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$publication = Publication::findOrFail($id);
		return view('admin.publications.edit', compact('publication'));
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
		$publication = Publication::findOrFail($id);

		

		
		$publication->update($request->except(''));
		return redirect('admin/publications')->with('success', Lang::get('message.success.update'));
	}

	/**
    	 * Delete confirmation for the given Publication.
    	 *
    	 * @param  int      $id
    	 * @return View
    	 */
    	public function getModalDelete($id = null)
    	{
            $error = '';
            $model = '';
            $confirm_route =  route('admin.publications.delete',['id'=>$id]);
            return View('admin/layouts/modal_confirmation', compact('error','model', 'confirm_route'));

    	}

    	/**
    	 * Delete the given Publication.
    	 *
    	 * @param  int      $id
    	 * @return Redirect
    	 */
    	public function getDelete($id = null)
    	{
    		$publication = Publication::destroy($id);

            // Redirect to the group management page
            return redirect('admin/publications')->with('success', Lang::get('message.success.delete'));

    	}

}