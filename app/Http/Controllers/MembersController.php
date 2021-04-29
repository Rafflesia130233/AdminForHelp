<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Member;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;

class MembersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$members = Member::latest()->get();
		return view('admin.members.index', compact('members'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.members.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

	    $member= new Member($request->except('filePath_image'));
		
                if ($request->hasFile('filePath_image')) {
        			$file            = $request->file('filePath_image');
        			$destinationPath =  public_path().'/uploads/crudfiles/';
        			$filename        = str_random(20) .'.' . $file->getClientOriginalExtension() ?: 'png';
        			$member->filePath = $filename;
        			if ($request->hasFile('filePath_image')) {
						$request->file('filePath_image')->move($destinationPath, $filename);
					}
        		}

		$member->save();
		return redirect('admin/members')->with('success', Lang::get('message.success.create'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$member = Member::findOrFail($id);
		return view('admin.members.show', compact('member'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$member = Member::findOrFail($id);
		return view('admin.members.edit', compact('member'));
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
		$member = Member::findOrFail($id);

		

		
                if ($request->hasFile('filePath_image')) {
        			$file            = $request->file('filePath_image');
        			$destinationPath =  public_path().'/uploads/crudfiles/';
        			$filename        = str_random(20) .'.' . $file->getClientOriginalExtension() ?: 'png';
        			$member->filePath = $filename;
        			if ($request->hasFile('filePath_image')) {
						$request->file('filePath_image')->move($destinationPath, $filename);
					}
        		}

		$member->update($request->except('filePath_image'));
		return redirect('admin/members')->with('success', Lang::get('message.success.update'));
	}

	/**
    	 * Delete confirmation for the given Member.
    	 *
    	 * @param  int      $id
    	 * @return View
    	 */
    	public function getModalDelete($id = null)
    	{
            $error = '';
            $model = '';
            $confirm_route =  route('admin.members.delete',['id'=>$id]);
            return View('admin/layouts/modal_confirmation', compact('error','model', 'confirm_route'));

    	}

    	/**
    	 * Delete the given Member.
    	 *
    	 * @param  int      $id
    	 * @return Redirect
    	 */
    	public function getDelete($id = null)
    	{
    		$member = Member::destroy($id);

            // Redirect to the group management page
            return redirect('admin/members')->with('success', Lang::get('message.success.delete'));

    	}

}