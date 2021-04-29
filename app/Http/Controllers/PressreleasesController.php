<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Pressrelease;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;

class PressreleasesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$pressreleases = Pressrelease::latest()->get();
		return view('admin.pressreleases.index', compact('pressreleases'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.pressreleases.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

	    $pressrelease= new Pressrelease($request->except('filePath_image'));
		
                if ($request->hasFile('filePath_image')) {
        			$file            = $request->file('filePath_image');
        			$destinationPath =  public_path().'/uploads/crudfiles/';
        			$filename        = str_random(20) .'.' . $file->getClientOriginalExtension() ?: 'png';
        			$pressrelease->filePath = $filename;
        			if ($request->hasFile('filePath_image')) {
						$request->file('filePath_image')->move($destinationPath, $filename);
					}
        		}

		$pressrelease->save();
		return redirect('admin/pressreleases')->with('success', Lang::get('message.success.create'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$pressrelease = Pressrelease::findOrFail($id);
		return view('admin.pressreleases.show', compact('pressrelease'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$pressrelease = Pressrelease::findOrFail($id);
		return view('admin.pressreleases.edit', compact('pressrelease'));
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
		$pressrelease = Pressrelease::findOrFail($id);

		

		
                if ($request->hasFile('filePath_image')) {
        			$file            = $request->file('filePath_image');
        			$destinationPath =  public_path().'/uploads/crudfiles/';
        			$filename        = str_random(20) .'.' . $file->getClientOriginalExtension() ?: 'png';
        			$pressrelease->filePath = $filename;
        			if ($request->hasFile('filePath_image')) {
						$request->file('filePath_image')->move($destinationPath, $filename);
					}
        		}

		$pressrelease->update($request->except('filePath_image'));
		return redirect('admin/pressreleases')->with('success', Lang::get('message.success.update'));
	}

	/**
    	 * Delete confirmation for the given Pressrelease.
    	 *
    	 * @param  int      $id
    	 * @return View
    	 */
    	public function getModalDelete($id = null)
    	{
            $error = '';
            $model = '';
            $confirm_route =  route('admin.pressreleases.delete',['id'=>$id]);
            return View('admin/layouts/modal_confirmation', compact('error','model', 'confirm_route'));

    	}

    	/**
    	 * Delete the given Pressrelease.
    	 *
    	 * @param  int      $id
    	 * @return Redirect
    	 */
    	public function getDelete($id = null)
    	{
    		$pressrelease = Pressrelease::destroy($id);

            // Redirect to the group management page
            return redirect('admin/pressreleases')->with('success', Lang::get('message.success.delete'));

    	}

}