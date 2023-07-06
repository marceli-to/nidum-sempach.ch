<?php
namespace App\Mail;
use App\Models\Subscriber;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ConfirmationOwner extends Mailable
{
  use Queueable, SerializesModels;

  protected $data;

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct($data)
  {
    $this->data = $data;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
    return $this->from(['address' => 'no-reply@billrothminerva.ch', 'name' => 'Nidum Sempach'])
                ->subject('Interessent Nidum Sempach')
                ->with([
                  'data' => $this->data,
                ])
                ->text('mails.confirmation-owner-json');
  }
}
