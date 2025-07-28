<?php

namespace App\Http\Controllers\Consultation;

use Illuminate\Http\Request;

use App\Mail\Consultation\CtaMail;

use App\Actions\TelegramSendAction;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

use App\Mail\Consultation\ConsultMail;
use App\Http\Requests\Consultation\CtaFormRequest;
use App\Http\Requests\Consultation\ConsultFormRequest;

class SenderConsultController extends Controller
{
    public function send_consultation(ConsultFormRequest $request, TelegramSendAction $tgsender) {
        $data = $request->validated();
        $tmp = $tgsender->handle("<b>Заявка с сайта</b>\n\rТелефон: ".$data['phone']);
        Mail::to(explode(",",config('consultation.mailadresat')))->send(new ConsultMail($data));

        return true;
    }

    public function send_cta(CtaFormRequest $request, TelegramSendAction $tgsender) {
        $data = $request->validated();
        $tmp = $tgsender->handle("<b>Заявка с сайта (CTA)</b>\n\rТелефон: ".$data['phone']."\n\rИмя: ".$data['name']);
        Mail::to(explode(",",config('consultation.mailadresat')))->send(new CtaMail($data));

        return true;
    }

    public function show_thencs() {
        return view('mail.consultation.thencs');
    }
}
