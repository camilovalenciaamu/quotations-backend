<?php

namespace App\Services;
use App\Models\Quotation\Quotation;
use Carbon\Carbon;

class QuotationService
{
    public function GetDiffInHours($email):Array
    {
        $search_quotations = Quotation::where('email', $email)->get()->last();
        $diff = 0;
        $message = "";
        if ($search_quotations) {
            $last_quotation = Carbon::parse($search_quotations->created_at);
            $today = Carbon::now();
            $diff = $last_quotation->diffInRealHours($today);
            $message = "esta";
        }
        return ['diff'=>$diff, 'message'=>$message];
    }




}
