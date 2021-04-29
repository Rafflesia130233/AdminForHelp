<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Image;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;

class ImagesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$images = Image::latest()->get();
		return view('admin.images.index', compact('images'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.images.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

	    $image= new Image($request->except('filePath_image'));
		
                if ($request->hasFile('filePath_image')) {
        			$file            = $request->file('filePath_image');
        			$destinationPath =  public_path().'/uploads/crudfiles/';
        			$filename        = str_random(20) .'.' . $file->getClientOriginalExtension() ?: 'png';
        			$image->filePath = $filename;
        			if ($request->hasFile('filePath_image')) {
						$request->file('filePath_image')->move($destinationPath, $filename);
					}
        		}

		$image->save();
		return redirect('admin/images')->with('success', Lang::get('message.success.create'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$image = Image::findOrFail($id);
		return view('admin.images.show', compact('image'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$image = Image::findOrFail($id);
		return view('admin.images.edit', compact('image'));
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
		$image = Image::findOrFail($id);

		

		
                if ($request->hasFile('filePath_image')) {
        			$file            = $request->file('filePath_image');
        			$destinationPath =  public_path().'/uploads/crudfiles/';
        			$filename        = str_random(20) .'.' . $file->getClientOriginalExtension() ?: 'png';
        			$image->filePath = $filename;
        			if ($request->hasFile('filePath_image')) {
						$request->file('filePath_image')->move($destinationPath, $filename);
					}
        		}

		$image->update($request->except('filePath_image'));
		return redirect('admin/images')->with('success', Lang::get('message.success.update'));
	}

	/**
    	 * Delete confirmation for the given Image.
    	 *
    	 * @param  int      $id
    	 * @return View
    	 */
    	public function getModalDelete($id = null)
    	{
            $error = '';
            $model = '';
            $confirm_route =  route('admin.images.delete',['id'=>$id]);
            return View('admin/layouts/modal_confirmation', compact('error','model', 'confirm_route'));

    	}

    	/**
    	 * Delete the given Image.
    	 *
    	 * @param  int      $id
    	 * @return Redirect
    	 */
    	public function getDelete($id = null)
    	{
    		$image = Image::destroy($id);

            // Redirect to the group management page
            return redirect('admin/images')->with('success', Lang::get('message.success.delete'));

    	}

}