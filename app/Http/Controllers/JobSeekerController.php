<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobLocation;
use App\Models\JobSeeker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class JobSeekerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	   $data['jobLocation'] = JobLocation::get();
       return view('job_seeker.job_seeker_register',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminDashboard()
    {
        return view('job_seeker.admin_dashboard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		 $messages = [
            'name.required' => 'Name is Required',
            'email.unique' 	=> 'Email is Already Exists',
            'phone.required'=> 'Phone Number is Required',
            'experience.required' 	=> 'Experience is required',
			'notice_period.required'	=> 'Notice Period is required',
			'skill.required' 		=> 'Skill is required',
			'job_location.required'	=> 'Job Location is required',
        ];
		
		$validator = Validator::make($request->all(), [
			'name' 			=> 'required',
            'email' 		=> 'required',
            'phone'			=> 'required',
            'experience' 	=> 'required',
			'notice_period'	=> 'required',
			'skill' 		=> 'required',
			'job_location'	=> 'required'
		,$messages]);
        if ($validator->fails()) {
            return redirect()
                            ->back()
                            ->withErrors($validator)
                            ->withInput();
        }
		$data = $request->all();
		$data['user_id'] = auth::user()->id;
		$data['status'] = 1;
		if($request->edit_id) {
			$jobSeeker = JobSeeker::findorfail($request->edit_id);
		} else {
			$jobSeeker = new JobSeeker();
		}
		
		$jobSeeker->fill($data);
		$jobSeeker->save();
		
		if($jobSeeker):
			return redirect()->back()->with('success','Job Seeker Register');
		endif;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
