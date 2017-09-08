<?php

namespace App\Http\Controllers\Member;

use Auth;
use App\Models\Member\Member;
use App\Models\Member\Job;
use App\Http\Requests\Members\StoreJob;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Uuid;

class JobController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $id = Auth::guard('web_member')->user()->id;
        return view('member.job.index')
                        ->with('active', Job::
                                where('member_id', $id)
                                ->where('active', TRUE)
                                ->get())
                        ->with('inactive', Job::
                                where('member_id', $id)
                                ->where('active', FALSE)
                                ->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('member.job.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJob $request) {

        $userid = Auth::guard('web_member')->user()->id;
        $create = Auth::guard('web_member')->user()->job()->create([
            'user_id' => $userid,
            'title' => $request->title,
            'description' => $request->description
        ]);

        if ($create) {
            return redirect('job')->with('success', 'Job posted. ');
        } else {
            return redirect('job')->with('error', 'Failed to post job please try again. ');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job) {
        $artist_id = Auth::guard('web_artist')->user()->id;
        $member_id = $job->member->id;

        return view('artist.job.show')
                        ->with('member_id', $member_id)
                        ->with('artist_id', $artist_id)
                        ->with('job', $job);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job) {
        $job->delete();

        return redirect('job')->with('success', 'Selected job has been deleted. ');
    }

    /**
     * Deactivate the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deactivate($id) {
        $job = Job::findOrFail($id);
        if ($job) {
            $job->active = '0';
            $job->save();
            return redirect('job')->with('success', 'Selected job has been deactivated. ');
        } else {
            return redirect('job')->with('error', 'Selected job could not be deactivated. ');
        }
    }

    /**
     * Deactivate the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function activate($id) {
        $job = Job::findOrFail($id);
        if ($job) {
            $job->active = '1';
            $job->save();
            return redirect('job')->with('success', 'Selected job has been activated. ');
        } else {
            return redirect('job')->with('error', 'Selected job could not be activated. ');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function listActiveJobs() {
//        return view('artist.job.index')
//                        ->with('jobs', Job::where('active', TRUE)->paginate(15));
//    }

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchActiveJobs(Request $request) {
        $jobs = Job::filter($request->all())->paginateFilter();       
        return view('artist.job.index')
                        ->with('jobs', $jobs);
    }

}
