<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Vedio;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;

class VediosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$vedios = Vedio::latest()->get();
		return view('admin.vedios.index', compact('vedios'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.vedios.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

	    $vedio= new Vedio($request->except('filePath_image'));
		
                if ($request->hasFile('filePath_image')) {
        			$file            = $request->file('filePath_image');
        			$destinationPath =  public_path().'/uploads/crudfiles/';
        			$filename        = str_random(20) .'.' . $file->getClientOriginalExtension() ?: 'png';
        			$vedio->filePath = $filename;
        			if ($request->hasFile('filePath_image')) {
						$request->file('filePath_image')->move($destinationPath, $filename);
					}
        		}

		$vedio->save();
		return redirect('admin/vedios')->with('success', Lang::get('message.success.create'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$vedio = Vedio::findOrFail($id);
		return view('admin.vedios.show', compact('vedio'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$vedio = Vedio::findOrFail($id);
		return view('admin.vedios.edit', compact('vedio'));
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
		$vedio = Vedio::findOrFail($id);

		

		
                if ($request->hasFile('filePath_image')) {
        			$file            = $request->file('filePath_image');
        			$destinationPath =  public_path().'/uploads/crudfiles/';
        			$filename        = str_random(20) .'.' . $file->getClientOriginalExtension() ?: 'png';
        			$vedio->filePath = $filename;
        			if ($request->hasFile('filePath_image')) {
						$request->file('filePath_image')->move($destinationPath, $filename);
					}
        		}

		$vedio->update($request->except('filePath_image'));
		return redirect('admin/vedios')->with('success', Lang::get('message.success.update'));
	}

	/**
    	 * Delete confirmation for the given Vedio.
    	 *
    	 * @param  int      $id
    	 * @return View
    	 */
    	public function getModalDelete($id = null)
    	{
            $error = '';
            $model = '';
            $confirm_route =  route('admin.vedios.delete',['id'=>$id]);
            return View('admin/layouts/modal_confirmation', compact('error','model', 'confirm_route'));

    	}

    	/**
    	 * Delete the given Vedio.
    	 *
    	 * @param  int      $id
    	 * @return Redirect
    	 */
    	public function getDelete($id = null)
    	{
    		$vedio = Vedio::destroy($id);

            // Redirect to the group management page
            return redirect('admin/vedios')->with('success', Lang::get('message.success.delete'));

    	}

}