<?php

namespace App\Jobs;

use App\Mail\contactus as MailContactus;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class contactusjob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $data;
    public $departmentUser;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data,$departmentUser)
    {
        //
        $this->data=$data;
        $this->departmentUser=$departmentUser;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        foreach ($this->departmentUser as $recipient) {
            Mail::to($recipient)->send(new MailContactus($this->data));
        }
    }
}
