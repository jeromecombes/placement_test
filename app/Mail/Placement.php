<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Placement extends Mailable
{
    use Queueable, SerializesModels;

    public $answers = null;
    public $scores = null;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $studentName = $this->answers->firstname . ' ' . $this->answers->lastname;

        return $this->from('noreply@columbiaprograms.fr')
            ->subject('Examen de placement ' . $studentName)
            ->view('email')
            ->with([
                'answers' => $this->answers,
                'scores' => $this->scores,
            ]);
    }
}
