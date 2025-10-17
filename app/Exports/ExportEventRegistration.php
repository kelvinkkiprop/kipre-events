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
            'user.country', // ✅ country via user
            'event',
            'package',
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
            optional($registration->user)->title ?? 'N/A', // Title
            optional($registration->user)->name ?? 'N/A', // Name
            optional($registration->user)->institution ?? 'N/A', // Institution
            optional($registration->package)->name ?? 'N/A', // Package
            optional($registration->user)->physical_address ?? 'N/A', // Physical Address
            optional(optional($registration->user)->country)->name ?? 'N/A', // ✅ Country via user
            optional(optional($registration->user)->position)->name ?? 'N/A', // Your Position
            $registration->specify_position ?? 'N/A', // Specify Position
            $registration->student_id_url ?? 'N/A', // Upload Student Confirmation Document
            optional($registration->user)->email ?? 'N/A', // Email
            optional($registration->user)->phone ?? 'N/A', // Phone
            optional($registration->attendanceMode)->name ?? 'N/A', // Mode of Attendance
            optional($registration->guestType)->name ?? 'N/A', // Type of Guest
            $registration->will_present ? 'Yes' : 'No', // Would you like to make a presentation?
            optional($registration->sessionToPresent)->title ?? 'N/A', // Which session would you like to present?
            $registration->abstract_url ?? 'N/A', // Upload an abstract
            $registration->id, // Submission ID
            $registration->created_at, // Submission Create Date
        ];
    }

    /**
     * Define Excel column headings
     */
    public function headings(): array
    {
        return [
            'Title',
            'Name',
            'Institution',
            'Package',
            'Physical Address (Use institution or office address)',
            'Country (Where your institution is located)',
            'Your Position (Select the most appropriate)',
            'Specify Position',
            'Upload Student Confirmation Document (e.g. Student ID, Letter from Learning Institution)',
            'Email',
            'Phone',
            'Mode of Attendance',
            'Type of Guest',
            'Would you like to make a presentation at the Conference?',
            'Which session would you like to present?',
            'Upload an abstract (250 words, Times New Roman 12, continuous prose)',
            'Submission ID',
            'Submission Create Date',
        ];
    }
}
