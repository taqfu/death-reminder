<?php

namespace App\Http\Controllers;

use App\Mail\NewSubscription;
use App\Subscription;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use Mail;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    		$request->validate([
    			"email"=> ["required", "max:255", "email", Rule::unique('subscriptions')->where(function ($query) {
            return $query->whereNull('unsubscribed_at');})]
    		]);
        $unsubscribe_key = uniqid();
        $subscription = new Subscription;
        $subscription->email = $request->email;
        $subscription->unsubscribe_key = $unsubscribe_key;
        $subscription->save();
        Mail::to("2buzezsn@gmail.com")->send(new NewSubscription($request->email, $unsubscribe_key));
        return view ('Subscription.success');


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
    public function unsubscribe($email, $unsubscribe_key){
        $subscription = Subscription :: where ('email', $email)
          ->where('unsubscribe_key', $unsubscribe_key)
          ->whereNull('unsubscribed_at')->first();
        if ($subscription==null){
            return "Sorry, we can't find your subscription.";
        }
        $subscription->unsubscribed_at = date("Y-m-d H:i:s");
        $subscription->save();
        return "You have now been unsubscribed. You'll live forever now!";
    }
}
