<?php

namespace App\Exports;

use App\Models\Main\EventRegistration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ExportEventRegistration implements FromCollection, WithHeadings, WithMapping
{
    /**
     * Fetch all event registrations with related data
     */
    public function collection()
    {
        return EventRegistration::with([
            'user',
            'event',
            'package',
            'status',
            // 'paymentMethod',
            'attendanceMode',
            'sessionToPresent'
        ])->get();
    }

    /**
     * Map each row for export
     */
    public function map($registration): array
    {
        return [
            $registration->id,
            optional($registration->user)->name ?? 'N/A',
            optional($registration->event)->title ?? 'N/A',
            $registration->invoice_number,
            optional($registration->package)->name ?? 'N/A',
            optional($registration->status)->name ?? 'N/A',
            // optional($registration->paymentMethod)->name ?? 'N/A',
            optional($registration->attendanceMode)->name ?? 'N/A',
            $registration->require_formal_invitation ? 'Yes' : 'No',
            $registration->address_invitation_to,
            $registration->will_present ? 'Yes' : 'No',
            optional($registration->sessionToPresent)->title ?? 'N/A',
            $registration->abstract_url,
            $registration->student_id_url,
            $registration->created_at,
            $registration->updated_at,
        ];
    }

    /**
     * Define Excel column headings
     */
    public function headings(): array
    {
        return [
            'ID',
            'User Name',
            'Event Title',
            'Invoice Number',
            'Package',
            'Status',
            'Payment Method',
            'Mode of Attendance',
            'Require Formal Invitation',
            'Address Invitation To',
            'Will Present',
            'Session To Present',
            'Abstract URL',
            'Student ID URL',
            'Created At',
            'Updated At',
        ];
    }
}
