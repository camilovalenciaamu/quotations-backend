<?php

namespace App\Http\Controllers\Quotation;

use App\Services\QuotationService;
use App\Models\Quotation\Quotation;
use App\Http\Controllers\Controller;
use App\Http\Requests\QuotationRequest;
use App\Services\SendEmailService;
class QuotationController extends Controller
{

    public function CreateQuotation(QuotationRequest $request, Quotation $quotation, QuotationService $service, SendEmailService $email)
    {
        $diff = $service->GetDiffInHours($request->email);
        if ($diff['diff'] < 24 && $diff['message'] == 'esta')
            return response()->json(['error' => "¡Ya tienes una cotización, debes esperar 24 horas para crear otra!"], 400);
        $emails = [
            'camiloamu82@gmail.com'
            // 'nleon@processoft.com.co','ocalero@processoft.com.co','jmartinez@processoft.com.co'
        ];

        $email->SendEmail($emails, $request);
        return response()->json(['cotizacion' => $quotation->create($request->validated())], 200);
    }

}
