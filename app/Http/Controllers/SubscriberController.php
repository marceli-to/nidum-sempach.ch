<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Mail\ConfirmationSubscriber;
use App\Mail\ConfirmationOwner;
use Illuminate\Support\Facades\Mail;

class SubscriberController extends Controller
{
  protected $subscriber;

  public function __construct(Subscriber $subscriber)
  {
    $this->subscriber = $subscriber;
  }

  /**
   * Store the data & send the mails
   * 
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */  
  public function store(Request $request)
  {
    // validate request
    $validatedData = $request->validate([
      'firstname' => 'required',
      'name'      => 'required',
      'street'    => 'required',
      'location'  => 'required',
      'email'     => 'required|email',
      'interest'  => 'required|min:1',
    ]);

    // store the data
    $subscriber = new Subscriber;
    $subscriber->firstname  = $request->firstname;
    $subscriber->name       = $request->name;
    $subscriber->street     = $request->street;
    $subscriber->location   = $request->location;
    $subscriber->email      = $request->email;
    $subscriber->interest   = implode(', ' , $request->interest);
    $subscriber->phone      = isset($request->phone) ? $request->phone : NULL;
    $subscriber->remarks    = isset($request->remarks) ? $request->remarks : NULL;
    $subscriber->save();

    // send mail to owner, wrap it in a try catch block to prevent errors
    // try {
    //   Mail::to(env('MAIL_TO'))->send(new ConfirmationSubscriber($subscriber));
    // } 
    // catch (\Exception $e) {
    //   \Log::error($e->getMessage());
    // }

    // redirect status
    return redirect()->route('page_contact_subscribed');
  }

}
