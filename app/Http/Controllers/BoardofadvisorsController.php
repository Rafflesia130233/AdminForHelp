<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Boardofadvisor;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;

class BoardofadvisorsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$boardofadvisors = Boardofadvisor::latest()->get();
		return view('admin.boardofadvisors.index', compact('boardofadvisors'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.boardofadvisors.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

	    $boardofadvisor= new Boardofadvisor($request->except('filePath_image'));
		
                if ($request->hasFile('filePath_image')) {
        			$file            = $request->file('filePath_image');
        			$destinationPath =  public_path().'/uploads/crudfiles/';
        			$filename        = str_random(20) .'.' . $file->getClientOriginalExtension() ?: 'png';
        			$boardofadvisor->filePath = $filename;
        			if ($request->hasFile('filePath_image')) {
						$request->file('filePath_image')->move($destinationPath, $filename);
					}
        		}

		$boardofadvisor->save();
		return redirect('admin/boardofadvisors')->with('success', Lang::get('message.success.create'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$boardofadvisor = Boardofadvisor::findOrFail($id);
		return view('admin.boardofadvisors.show', compact('boardofadvisor'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$boardofadvisor = Boardofadvisor::findOrFail($id);
		return view('admin.boardofadvisors.edit', compact('boardofadvisor'));
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
		$boardofadvisor = Boardofadvisor::findOrFail($id);

		

		
                if ($request->hasFile('filePath_image')) {
        			$file            = $request->file('filePath_image');
        			$destinationPath =  public_path().'/uploads/crudfiles/';
        			$filename        = str_random(20) .'.' . $file->getClientOriginalExtension() ?: 'png';
        			$boardofadvisor->filePath = $filename;
        			if ($request->hasFile('filePath_image')) {
						$request->file('filePath_image')->move($destinationPath, $filename);
					}
        		}

		$boardofadvisor->update($request->except('filePath_image'));
		return redirect('admin/boardofadvisors')->with('success', Lang::get('message.success.update'));
	}

	/**
    	 * Delete confirmation for the given Boardofadvisor.
    	 *
    	 * @param  int      $id
    	 * @return View
    	 */
    	public function getModalDelete($id = null)
    	{
            $error = '';
            $model = '';
            $confirm_route =  route('admin.boardofadvisors.delete',['id'=>$id]);
            return View('admin/layouts/modal_confirmation', compact('error','model', 'confirm_route'));

    	}

    	/**
    	 * Delete the given Boardofadvisor.
    	 *
    	 * @param  int      $id
    	 * @return Redirect
    	 */
    	public function getDelete($id = null)
    	{
    		$boardofadvisor = Boardofadvisor::destroy($id);

            // Redirect to the group management page
            return redirect('admin/boardofadvisors')->with('success', Lang::get('message.success.delete'));

    	}

}