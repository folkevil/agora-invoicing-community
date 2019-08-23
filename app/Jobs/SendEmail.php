<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Http\Controllers\Common\TemplateController;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 5;
    protected $from;
    protected $to;
    protected $template_data;
    protected $template_name;
    protected $replace;
    protected $type;
    protected $bcc;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($from, $to, $template_data, $template_name, $replace,$type,$bcc)
    {
        $this->from = $from;
        $this->to = $to;
        $this->template_data = $template_data;
        $this->template_name = $template_name;
        $this->replace = $replace;
        $this->type = $type;
        $this->bcc = $bcc;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(TemplateController $templateController)
    {
        $p = $templateController->mailing(
           $this->from,
           $this->to,
           $this->template_data,
           $this->template_name,
           $this->replace,
           $this->type,
           $this->bcc
         );
         return $p;
    }
}
