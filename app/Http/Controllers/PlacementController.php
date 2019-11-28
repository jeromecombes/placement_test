<?php

namespace App\Http\Controllers;

use App\Placement;
use App\Mail\Placement as MailPlacement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class PlacementController extends Controller
{

    /**
     * Display the placement test form
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form');
    }

    /**
     * Store information in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'lastname' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'years' => 'required|string|max:255',
        ]);

        $p = new Placement;
        $p->lastname = trim(preg_replace ("/\s+/", " ", $request->lastname));
        $p->firstname = trim(preg_replace ("/\s+/", " ", $request->firstname));
        $p->email = trim(preg_replace ("/\s+/", " ", $request->email));
        $p->years = trim(preg_replace ("/\s+/", " ", $request->years));
        $p->q1_1 = trim(preg_replace ("/\s+/", " ", $request->q1_1));
        $p->q1_2 = trim(preg_replace ("/\s+/", " ", $request->q1_2));
        $p->q1_3 = trim(preg_replace ("/\s+/", " ", $request->q1_3));
        $p->q1_4 = trim(preg_replace ("/\s+/", " ", $request->q1_4));
        $p->q1_5 = trim(preg_replace ("/\s+/", " ", $request->q1_5));
        $p->q1_6 = trim(preg_replace ("/\s+/", " ", $request->q1_6));
        $p->q1_7 = trim(preg_replace ("/\s+/", " ", $request->q1_7));
        $p->q1_8 = trim(preg_replace ("/\s+/", " ", $request->q1_8));
        $p->q1_9 = trim(preg_replace ("/\s+/", " ", $request->q1_9));
        $p->q1_10 = trim(preg_replace ("/\s+/", " ", $request->q1_10));
        $p->q1_11 = trim(preg_replace ("/\s+/", " ", $request->q1_11));
        $p->q1_12 = trim(preg_replace ("/\s+/", " ", $request->q1_12));
        $p->q1_13 = trim(preg_replace ("/\s+/", " ", $request->q1_13));
        $p->q1_14 = trim(preg_replace ("/\s+/", " ", $request->q1_14));
        $p->q1_15 = trim(preg_replace ("/\s+/", " ", $request->q1_15));
        $p->q1_16 = trim(preg_replace ("/\s+/", " ", $request->q1_16));
        $p->q1_17 = trim(preg_replace ("/\s+/", " ", $request->q1_17));
        $p->q1_18 = trim(preg_replace ("/\s+/", " ", $request->q1_18));
        $p->q1_19 = trim(preg_replace ("/\s+/", " ", $request->q1_19));
        $p->q1_20 = trim(preg_replace ("/\s+/", " ", $request->q1_20));
        $p->q1_21 = trim(preg_replace ("/\s+/", " ", $request->q1_21));
        $p->q1_22 = trim(preg_replace ("/\s+/", " ", $request->q1_22));
        $p->q2_1 = trim(preg_replace ("/\s+/", " ", $request->q2_1));
        $p->q2_2 = trim(preg_replace ("/\s+/", " ", $request->q2_2));
        $p->q2_3 = trim(preg_replace ("/\s+/", " ", $request->q2_3));
        $p->q2_4 = trim(preg_replace ("/\s+/", " ", $request->q2_4));
        $p->q2_5 = trim(preg_replace ("/\s+/", " ", $request->q2_5));
        $p->q2_6 = trim(preg_replace ("/\s+/", " ", $request->q2_6));
        $p->q3_1 = trim(preg_replace ("/\s+/", " ", $request->q3_1));
        $p->q3_2 = trim(preg_replace ("/\s+/", " ", $request->q3_2));
        $p->q3_3 = trim(preg_replace ("/\s+/", " ", $request->q3_3));
        $p->q3_4 = trim(preg_replace ("/\s+/", " ", $request->q3_4));
        $p->q3_5 = trim(preg_replace ("/\s+/", " ", $request->q3_5));
        $p->q3_6 = trim(preg_replace ("/\s+/", " ", $request->q3_6));
        $p->q3_7 = trim(preg_replace ("/\s+/", " ", $request->q3_7));
        $p->q3_8 = trim(preg_replace ("/\s+/", " ", $request->q3_8));
        $p->q3_9 = trim(preg_replace ("/\s+/", " ", $request->q3_9));
        $p->q3_10 = trim(preg_replace ("/\s+/", " ", $request->q3_10));
        $p->q3_11 = trim(preg_replace ("/\s+/", " ", $request->q3_11));
        $p->q3_12 = trim(preg_replace ("/\s+/", " ", $request->q3_12));
        $p->q3_13 = trim(preg_replace ("/\s+/", " ", $request->q3_13));
        $p->q3_14 = trim(preg_replace ("/\s+/", " ", $request->q3_14));
        $p->q3_15 = trim(preg_replace ("/\s+/", " ", $request->q3_15));
        $p->q3_16 = trim(preg_replace ("/\s+/", " ", $request->q3_16));
        $p->q3_17 = trim(preg_replace ("/\s+/", " ", $request->q3_17));
        $p->q3_18 = trim(preg_replace ("/\s+/", " ", $request->q3_18));
        $p->q3_19 = trim(preg_replace ("/\s+/", " ", $request->q3_19));
        $p->q3_20 = trim(preg_replace ("/\s+/", " ", $request->q3_20));
        $p->q4_1 = trim(preg_replace ("/\s+/", " ", $request->q4_1));
        $p->q4_2 = trim(preg_replace ("/\s+/", " ", $request->q4_2));
        $p->q4_3 = trim(preg_replace ("/\s+/", " ", $request->q4_3));
        $p->q4_4 = trim(preg_replace ("/\s+/", " ", $request->q4_4));
        $p->q4_5 = trim(preg_replace ("/\s+/", " ", $request->q4_5));
        $p->q4_6 = trim(preg_replace ("/\s+/", " ", $request->q4_6));
        $p->q4_7 = trim(preg_replace ("/\s+/", " ", $request->q4_7));
        $p->q4_8 = trim(preg_replace ("/\s+/", " ", $request->q4_8));
        $p->q4_9 = trim(preg_replace ("/\s+/", " ", $request->q4_9));
        $p->q4_10 = trim(preg_replace ("/\s+/", " ", $request->q4_10));
        $p->q5_1 = trim(preg_replace ("/\s+/", " ", $request->q5_1));
        $p->q5_2 = trim(preg_replace ("/\s+/", " ", $request->q5_2));
        $p->q5_3 = trim(preg_replace ("/\s+/", " ", $request->q5_3));
        $p->q5_4 = trim(preg_replace ("/\s+/", " ", $request->q5_4));
        $p->q5_5 = trim(preg_replace ("/\s+/", " ", $request->q5_5));
        $p->q5_6 = trim(preg_replace ("/\s+/", " ", $request->q5_6));
        $p->q5_7 = trim(preg_replace ("/\s+/", " ", $request->q5_7));
        $p->q5_8 = trim(preg_replace ("/\s+/", " ", $request->q5_8));
        $p->q5_9 = trim(preg_replace ("/\s+/", " ", $request->q5_9));
        $p->q5_10 = trim(preg_replace ("/\s+/", " ", $request->q5_10));
        $p->q6_1 = trim(preg_replace ("/\s+/", " ", $request->q6_1));
        $p->q6_2 = trim(preg_replace ("/\s+/", " ", $request->q6_2));
        $p->q6_3 = trim(preg_replace ("/\s+/", " ", $request->q6_3));
        $p->q6_4 = trim(preg_replace ("/\s+/", " ", $request->q6_4));
        $p->q6_5 = trim(preg_replace ("/\s+/", " ", $request->q6_5));
        $p->q6_6 = trim(preg_replace ("/\s+/", " ", $request->q6_6));
        $p->q6_7 = trim(preg_replace ("/\s+/", " ", $request->q6_7));
        $p->q6_8 = trim(preg_replace ("/\s+/", " ", $request->q6_8));
        $p->q6_9 = trim(preg_replace ("/\s+/", " ", $request->q6_9));
        $p->q6_10 = trim(preg_replace ("/\s+/", " ", $request->q6_10));
        $p->q7_1 = trim(preg_replace ("/\s+/", " ", $request->q7_1));
        $p->q7_2 = trim(preg_replace ("/\s+/", " ", $request->q7_2));
        $p->q7_3 = trim(preg_replace ("/\s+/", " ", $request->q7_3));
        $p->q7_4 = trim(preg_replace ("/\s+/", " ", $request->q7_4));
        $p->q7_5 = trim(preg_replace ("/\s+/", " ", $request->q7_5));
        $p->q7_6 = trim(preg_replace ("/\s+/", " ", $request->q7_6));
        $p->save();

        $this->sendMail($p);

        return redirect()->route('thanks');
    }

    /**
     * Good answers
     *
     * @return Array of good answers
     */
    public function answers()
    {
        $answers = array(
            'q1_1' => array("de"),
            'q1_2' => array("de la"),
            'q1_3' => array("du"),
            'q1_4' => array("la"),
            'q1_5' => array("de l'"),
            'q1_6' => array("un"),
            'q1_7' => array("de la"),
            'q1_8' => array("du"),
            'q1_9' => array("un","mon"),
            'q1_10' => array("une","la","ma"),
            'q1_11' => array("la","sa"),
            'q1_12' => array("du","de"),
            'q1_13' => array("de","ses"),
            'q1_14' => array("un","son"),
            'q1_15' => array("[vide]"),
            'q1_16' => array("la","sa"),
            'q1_17' => array("le"),
            'q1_18' => array("la"),
            'q1_19' => array("une","la","ma"),
            'q1_20' => array("d'"),
            'q1_21' => array("les"),
            'q1_22' => array("les"),
            'q2_1' => array("ait fini","finisse"),
            'q2_2' => array("mette"),
            'q2_3' => array("soit","fût"),
            'q2_4' => array("puisse"),
            'q2_5' => array("devienne"),
            'q2_6' => array("correspond","correspondrait","correspondait"),
            'q3_1' => array("faisait"),
            'q3_2' => array("arrivait","n'arrivait"),
            'q3_3' => array("s'est levé"),
            'q3_4' => array("est allé"),
            'q3_5' => array("était"),
            'q3_6' => array("a commencé"),
            'q3_7' => array("lisait"),
            'q3_8' => array("a entendu"),
            'q3_9' => array("était","a été"),
            'q3_10' => array("dormait"),
            'q3_11' => array("s'est dirigé"),
            'q3_12' => array("a ouverte"),
            'q3_13' => array("s'est trouvé"),
            'q3_14' => array("rentrait"),
            'q3_15' => array("s'est excusé"),
            'q3_16' => array("a expliqué"),
            'q3_17' => array("avait oublié"),
            'q3_18' => array("avait vu"),
            'q3_19' => array("s'était permis"),
            'q3_20' => array("a invité"),
            'q4_1' => array("le"),
            'q4_2' => array("la"),
            'q4_3' => array("le"),
            'q4_4' => array("lui"),
            'q4_5' => array("en"),
            'q4_6' => array("m'"),
            'q4_7' => array("elle"),
            'q4_8' => array("lui"),
            'q4_9' => array("moi"),
            'q4_10' => array("y"),
            'q5_1' => array("qui"),
            'q5_2' => array("où","comment "),
            'q5_3' => array("ce que"),
            'q5_4' => array("auxquelles"),
            'q5_5' => array("que"),
            'q5_6' => array("lesquels"),
            'q5_7' => array("dans lesquels","où"),
            'q5_8' => array("ce dont"),
            'q5_9' => array("d'où"),
            'q5_10' => array("dont"),
            'q6_1' => array("ans"),
            'q6_2' => array("pour","à"),
            'q6_3' => array("posé"),
            'q6_4' => array("rapide"),
            'q6_5' => array("tenir compte"),
            'q6_6' => array("de suite"),
            'q6_7' => array("s'éclaircir"),
            'q6_8' => array("ainsi"),
            'q6_9' => array("les deux premiers"),
            'q6_10' => array("à être recruté"),
            'q7_1' => array("ai acheté"),
            'q7_2' => array("s'est fait"),
            'q7_3' => array("s'est blessée"),
            'q7_4' => array("s'est cassé"),
            'q7_5' => array("se sont parlé"),
            'q7_6' => array("ne se sont pas encore vus")
        );

        return $answers;
    }

    /**
     * Control
     *
     * @param  \App\Placement $placement
     * @return Array ($answers, $scores)
     */
    public function control(Placement $placement)
    {
        $right_answers = $this->answers();
        $keys = array_keys($right_answers);

        $answers = (object) array(
            'lastname' => $placement->lastname,
            'firstname' => $placement->firstname,
            'email' => $placement->email,
            'years' => $placement->years,
        );

        $scores = (object) array('total'=> 0, 'q1'=> 0, 'q2'=> 0, 'q3'=> 0, 'q4'=> 0, 'q5'=> 0, 'q6'=> 0, 'q7'=> 0);

        foreach ($keys as $k) {
            $value = strtolower($placement->{$k});

            if ($value == '') {
		$value = '[vide]';
            }

            $answers->{$k} = (object) array('value' => $value, 'css' => 'answer-error');

            if (in_array($value, $right_answers[$k])) {

                $group = substr($k,0,2);

                $answers->{$k}->css = 'answer-ok';
                $scores->{$group} ++;
                $scores->total ++;

		if ( in_array($group, array('q2', 'q7')) or in_array($k, array('q3_12', 'q5_3', 'q5_4', 'q5_8'))) {
                    $scores->{$group} ++;
                    $scores->total ++;
		}
            }
        }

        return array($answers, $scores);
    }

    /**
     * Send the mail to admins
     *
     * @param  \App\Placement  $placement
     */
    public function sendMail(Placement $placement)
    {
        $control = $this->control($placement);
        list($answers, $scores) = $control;

        $mail = new MailPlacement();
        $mail->answers = $answers;
        $mail->scores = $scores;
        $mail->build();

        $recipients = array_map('trim', explode(';', env('MAIL_RECIPIENTS')));

        Mail::to($recipients)->send($mail);
    }

    /**
     * Display the thanks page
     *
     * @return \Illuminate\Http\Response
     */
    public function thanks()
    {
        Auth::logout();
        return view('thanks');
    }

}