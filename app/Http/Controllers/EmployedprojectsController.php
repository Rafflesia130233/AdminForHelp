<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Employedproject;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;

class EmployedprojectsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$employedprojects = Employedproject::latest()->get();
		return view('admin.employedprojects.index', compact('employedprojects'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.employedprojects.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

	    $employedproject= new Employedproject($request->except('image_image'));
		
                if ($request->hasFile('image_image')) {
        			$file            = $request->file('image_image');
        			$destinationPath =  public_path().'/uploads/crudfiles/';
        			$filename        = str_random(20) .'.' . $file->getClientOriginalExtension() ?: 'png';
        			$employedproject->image = $filename;
        			if ($request->hasFile('image_image')) {
						$request->file('image_image')->move($destinationPath, $filename);
					}
        		}

		$employedproject->save();
		return redirect('admin/employedprojects')->with('success', Lang::get('message.success.create'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$employedproject = Employedproject::findOrFail($id);
		return view('admin.employedprojects.show', compact('employedproject'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$employedproject = Employedproject::findOrFail($id);
		return view('admin.employedprojects.edit', compact('employedproject'));
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
		$employedproject = Employedproject::findOrFail($id);

		

		
                if ($request->hasFile('image_image')) {
        			$file            = $request->file('image_image');
        			$destinationPath =  public_path().'/uploads/crudfiles/';
        			$filename        = str_random(20) .'.' . $file->getClientOriginalExtension() ?: 'png';
        			$employedproject->image = $filename;
        			if ($request->hasFile('image_image')) {
						$request->file('image_image')->move($destinationPath, $filename);
					}
        		}

		$employedproject->update($request->except('image_image'));
		return redirect('admin/employedprojects')->with('success', Lang::get('message.success.update'));
	}

	/**
    	 * Delete confirmation for the given Employedproject.
    	 *
    	 * @param  int      $id
    	 * @return View
    	 */
    	public function getModalDelete($id = null)
    	{
            $error = '';
            $model = '';
            $confirm_route =  route('admin.employedprojects.delete',['id'=>$id]);
            return View('admin/layouts/modal_confirmation', compact('error','model', 'confirm_route'));

    	}

    	/**
    	 * Delete the given Employedproject.
    	 *
    	 * @param  int      $id
    	 * @return Redirect
    	 */
    	public function getDelete($id = null)
    	{
    		$employedproject = Employedproject::destroy($id);

            // Redirect to the group management page
            return redirect('admin/employedprojects')->with('success', Lang::get('message.success.delete'));

    	}

}