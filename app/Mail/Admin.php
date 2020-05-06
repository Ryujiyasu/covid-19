<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Admin extends Mailable
{
    use Queueable, SerializesModels;

    private $message;
    
    public function __construct($m)
    {
      $this->message = $m;

    }

    public function build()
    {
      return $this->from('FROM-ADDRESS@YOUR-DOMAIN.COM')
                  ->subject( "エラーのお知らせ" )
                  ->view('mails.admin')
                  ->with([
                      'user_name' => 'テスト 太郎' ,
                      'my_text'   => $this->message ,
                  ]);
    }
}
