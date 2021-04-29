<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Donorandpartner;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;

class DonorandpartnersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$donorandpartners = Donorandpartner::latest()->get();
		return view('admin.donorandpartners.index', compact('donorandpartners'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.donorandpartners.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

	    $donorandpartner= new Donorandpartner($request->except('image_image'));
		
                if ($request->hasFile('image_image')) {
        			$file            = $request->file('image_image');
        			$destinationPath =  public_path().'/uploads/crudfiles/';
        			$filename        = str_random(20) .'.' . $file->getClientOriginalExtension() ?: 'png';
        			$donorandpartner->image = $filename;
        			if ($request->hasFile('image_image')) {
						$request->file('image_image')->move($destinationPath, $filename);
					}
        		}

		$donorandpartner->save();
		return redirect('admin/donorandpartners')->with('success', Lang::get('message.success.create'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$donorandpartner = Donorandpartner::findOrFail($id);
		return view('admin.donorandpartners.show', compact('donorandpartner'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$donorandpartner = Donorandpartner::findOrFail($id);
		return view('admin.donorandpartners.edit', compact('donorandpartner'));
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
		$donorandpartner = Donorandpartner::findOrFail($id);

		

		
                if ($request->hasFile('image_image')) {
        			$file            = $request->file('image_image');
        			$destinationPath =  public_path().'/uploads/crudfiles/';
        			$filename        = str_random(20) .'.' . $file->getClientOriginalExtension() ?: 'png';
        			$donorandpartner->image = $filename;
        			if ($request->hasFile('image_image')) {
						$request->file('image_image')->move($destinationPath, $filename);
					}
        		}

		$donorandpartner->update($request->except('image_image'));
		return redirect('admin/donorandpartners')->with('success', Lang::get('message.success.update'));
	}

	/**
    	 * Delete confirmation for the given Donorandpartner.
    	 *
    	 * @param  int      $id
    	 * @return View
    	 */
    	public function getModalDelete($id = null)
    	{
            $error = '';
            $model = '';
            $confirm_route =  route('admin.donorandpartners.delete',['id'=>$id]);
            return View('admin/layouts/modal_confirmation', compact('error','model', 'confirm_route'));

    	}

    	/**
    	 * Delete the given Donorandpartner.
    	 *
    	 * @param  int      $id
    	 * @return Redirect
    	 */
    	public function getDelete($id = null)
    	{
    		$donorandpartner = Donorandpartner::destroy($id);

            // Redirect to the group management page
            return redirect('admin/donorandpartners')->with('success', Lang::get('message.success.delete'));

    	}

}