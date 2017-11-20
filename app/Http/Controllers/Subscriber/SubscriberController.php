<?php

namespace App\Http\Controllers\Subscriber;

//Subscriber Model
use App\Models\Subscriber\Subscriber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Subscriber\StoreSubscriber;
use App\Notifications\Subscriber\NewSubscriber;

class SubscriberController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('subscriber.auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubscriber $request) {

        $subscriber = new Subscriber;

        $subscriber->fullname = $request['name'];
        $subscriber->email = $request['email'];
        $subscriber->category = $request['category'];

        $subscriber->save();

        $subscriber->notify(new NewSubscriber($subscriber));

        return redirect('subscribers/create')->with('success', 'You have pre-registered.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subsriber\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function show(Subscriber $subscriber) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subsriber\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscriber $subscriber) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subsriber\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscriber $subscriber) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subsriber\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscriber $subscriber) {
        //
    }

}
