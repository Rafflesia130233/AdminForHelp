<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Program;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;

class ProgramsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$programs = Program::latest()->get();
		return view('admin.programs.index', compact('programs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.programs.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

	    $program= new Program($request->except('file_image'));
		
                if ($request->hasFile('file_image')) {
        			$file            = $request->file('file_image');
        			$destinationPath =  public_path().'/uploads/crudfiles/';
        			$filename        = str_random(20) .'.' . $file->getClientOriginalExtension() ?: 'png';
        			$program->file = $filename;
        			if ($request->hasFile('file_image')) {
						$request->file('file_image')->move($destinationPath, $filename);
					}
        		}

		$program->save();
		return redirect('admin/programs')->with('success', Lang::get('message.success.create'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$program = Program::findOrFail($id);
		return view('admin.programs.show', compact('program'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$program = Program::findOrFail($id);
		return view('admin.programs.edit', compact('program'));
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
		$program = Program::findOrFail($id);

		

		
                if ($request->hasFile('file_image')) {
        			$file            = $request->file('file_image');
        			$destinationPath =  public_path().'/uploads/crudfiles/';
        			$filename        = str_random(20) .'.' . $file->getClientOriginalExtension() ?: 'png';
        			$program->file = $filename;
        			if ($request->hasFile('file_image')) {
						$request->file('file_image')->move($destinationPath, $filename);
					}
        		}

		$program->update($request->except('file_image'));
		return redirect('admin/programs')->with('success', Lang::get('message.success.update'));
	}

	/**
    	 * Delete confirmation for the given Program.
    	 *
    	 * @param  int      $id
    	 * @return View
    	 */
    	public function getModalDelete($id = null)
    	{
            $error = '';
            $model = '';
            $confirm_route =  route('admin.programs.delete',['id'=>$id]);
            return View('admin/layouts/modal_confirmation', compact('error','model', 'confirm_route'));

    	}

    	/**
    	 * Delete the given Program.
    	 *
    	 * @param  int      $id
    	 * @return Redirect
    	 */
    	public function getDelete($id = null)
    	{
    		$program = Program::destroy($id);

            // Redirect to the group management page
            return redirect('admin/programs')->with('success', Lang::get('message.success.delete'));

    	}

}