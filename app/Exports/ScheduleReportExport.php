<?php

namespace App\Exports;

use App\Models\Schedule;
use Maatwebsite\Excel\Concerns\FromCollection;

class ScheduleReportExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Schedule::select('doctor_id', 'days', 'fromtime', 'totime', 'patient_time', 'serial', 'status')->get();
    }
    public function headings(): array{
        return[
            'Doctor Name',
            'Days',
            'From Time',
            'To Time',
            'Patient Time',
            'Serial',
            'Status',
        ];
    }
}
