<?php

namespace App\Exports;

use App\Models\AdvancePayment;
use Maatwebsite\Excel\Concerns\FromCollection;

class AdvancepaymentExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return AdvancePayment::select(
            'admission_id',
            'reciept_no',
            'patient_id',
            'payment_method',
            'amount',
            'card_or_cheque_no',
            'bank_name',
            'status'
        )->get();
    }
    public function headings(): array
    {
        return [
            'admission_id',
            'reciept_no',
            'patient_id',
            'payment_method',
            'amount',
            'card_or_cheque_no',
            'bank_name',
            'status'
        ];
    }
}
