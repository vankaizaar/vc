<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Application;
use App\Models\Artist;
use App\Models\Member\Job;
use App\Models\Member\Member;
use Illuminate\Http\Request;
use App\Http\Requests\StoreApplication;

class ApplicationController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $applications = Application::all();

        return $applications;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApplication $request) {

        $application = new Application;

        $application->artist_id = $request->artist_id;
        $application->job_id = $request->job_id;
        $application->member_id = $request->member_id;

        $application->save();

        return back()->with('success', 'You have successfully applied for the job.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Application $application) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application) {

        $application->delete();

        return back()->with('success', 'Your job application was deleted.');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listActiveApplication() {
        $artist_id = Auth::guard('web_artist')->user()->id;
        $applications = Artist::find($artist_id)->application()
                ->where('accepted', FALSE)
                ->where('rejected', FALSE)
                ->get();
        $applicationsAccepted = Artist::find($artist_id)->application()
                ->where('accepted', TRUE)
                ->where('rejected', FALSE)
                ->get();
        $applicationsRejected = Artist::find($artist_id)->application()
                ->where('accepted', FALSE)
                ->where('rejected', TRUE)
                ->get();
        return view('artist.application.index')
                        ->with('applications', $applications)
                        ->with('applicationsAccepted', $applicationsAccepted)
                        ->with('applicationsRejected', $applicationsRejected)
                        ->with('artist', Artist::find($artist_id));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listActiveApplicationMember() {
        $member_id = Auth::guard('web_member')->user()->id;
        $applications = Member::find($member_id)->application()
                ->where('accepted', FALSE)
                ->where('rejected', FALSE)
                ->get();
        $applicationsAccepted = Member::find($member_id)->application()
                ->where('accepted', TRUE)
                ->where('rejected', FALSE)
                ->get();
        $applicationsRejected = Member::find($member_id)->application()
                ->where('accepted', FALSE)
                ->where('rejected', TRUE)
                ->get();



        return view('member.application.index')
                        ->with('applications', $applications)
                        ->with('applicationsAccepted', $applicationsAccepted)
                        ->with('applicationsRejected', $applicationsRejected);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function rejectApplication(Request $request, Application $application) {

        $application->rejected = TRUE;

        $application->save();

        return back()->with('success', 'Applicant has been rejected.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function acceptApplication(Request $request, Application $application) {
        $application->accepted = TRUE;

        $application->save();

        return back()->with('success', 'Applicant has been accepted.');
    }

    /**
     * Update the specified user.
     *
     * @param  Request  $request
     * @param  string  $a_id
     * @return Response
     */
    public function showHiringForm(Request $request) {

        $artist_id = $request->id;

        $id = Auth::guard('web_member')->user()->id;


        return view('member.application.hire')
                        ->with('jobs', Job::where('member_id', $id)
                                ->where('active', TRUE)
                                ->get())
                        ->with('member_id', $id)
                        ->with('artist_id', $artist_id);
        ;
    }

    public function processHiringForm(StoreApplication $request) {
        $application = new Application;

        $application->artist_id = $request->artist_id;
        $application->job_id = $request->job_id;
        $application->member_id = $request->member_id;
        $application->accepted = TRUE;

        $application->save();

        return redirect()
                        ->route('applications.submitted')
                        ->with('success', 'You have successfully hired the artist. Please wait for a confirmation.');
    }

}
