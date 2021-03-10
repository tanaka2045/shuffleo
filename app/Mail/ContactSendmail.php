<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactSendmail extends Mailable
{
    use Queueable, SerializesModels;
    
    private $email_inquiry;
    private $title_inquiry;
    private $body_inquiry;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
      $this->email_inquiry = $inputs['email_inquiry'];
      $this->title_inquiry = $inputs['title_inquiry'];
      $this->body_inquiry = $inputs['body_inquiry'];
    }
    

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('tanaka2045h@gmail.com')
            ->subject('自動送信メール')
            ->view('contact.mail')
            ->with([
                'email_inquiry' => $this->email_inquiry,
                'title_inquiry' => $this->title_inquiry,
                'body_inquiry'  => $this->body_inquiry,
            ]);
    }
}

//自分のメールアドレスに問い合わせフォームの内容の設定
class ContactSendmailForMe extends Mailable
{
    use Queueable, SerializesModels;
    
    private $email_inquiry;
    private $title_inquiry;
    private $body_inquiry;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
      $this->email_inquiry = $inputs['email_inquiry'];
      $this->title_inquiry = $inputs['title_inquiry'];
      $this->body_inquiry = $inputs['body_inquiry'];
    }
    

    /**
     * Build the message.
     *
     * @return $this
     */
    
    //subjectのみ変更、その他は変え方がわからなかったので暫定でこのまま使用
    public function build()
    {
        return $this
            ->from('tanaka2045h@gmail.com')
            ->subject('問い合わせがきました!')
            ->view('contact.mail')
            ->with([
                'email_inquiry' => $this->email_inquiry,
                'title_inquiry' => $this->title_inquiry,
                'body_inquiry'  => $this->body_inquiry,
            ]);
    }
}
