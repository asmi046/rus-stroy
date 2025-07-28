<?php

namespace App\Http\Controllers\Consultation;

use Illuminate\Http\Request;

use App\Actions\TelegramSendAction;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

use App\Mail\Consultation\ConsultMail;
use App\Http\Requests\Consultation\ConsultFormRequest;

class SenderQuizController extends Controller
{
    protected function getTgMeassage($answers, $contacts) {
        $message = "<b>Заявка на рассчет</b>\n\r";
        $message .= "Телефон: ".$contacts['phone']."\n\r";
        $message .= "<b>Ответы на вопросы:</b>\n\r";
        foreach ($answers as $item) {
            $message .= "<b>".$item['questionText'].":</b> ".$item['answer']."\n\r";
        }
        return $message;
    }

    public function send(Request $request, TelegramSendAction $tgsender) {
        Log::info("Quiz request received", $request->all());

        $tgsender->handle($this->getTgMeassage($request->answers, $request->contactInfo));
        // $data = $request->validated();


        // $tmp = $tgsender->handle("<b>Заявка с сайта</b>\n\rТелефон: ".$data['phone']);



        // Mail::to(explode(",",config('consultation.mailadresat')))->send(new ConsultMail($data));

        // return redirect()->route('thencs_consult');
        return true;
    }

    public function show_thencs() {
        return view('mail.consultation.thencs');
    }
}
