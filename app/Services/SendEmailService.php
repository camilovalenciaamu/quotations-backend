<?php

namespace App\Services;
use Illuminate\Support\Facades\Mail;
use App\Mail\QuotationMail;
class SendEmailService

{
    public function SendEmail($emails, $data)
    {

        $details = [
            'title' => 'Información de la cotización.',
            'quotation' => $data,
        ];
        Mail::to('camiloamu82@gmail.com')->cc($emails)->send(new QuotationMail($details));

    }
}