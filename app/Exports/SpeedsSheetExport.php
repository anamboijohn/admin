<?php

namespace App\Exports;

use App\Models\TripSpeed;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class SpeedsSheetExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        return TripSpeed::all();
    }

    public function map($tripSpeed): array
    {
        return [
            $tripSpeed->id,
            $tripSpeed->trip_id,
            $tripSpeed->location_x,
            $tripSpeed->location_y,
            $tripSpeed->velocity,
            $tripSpeed->is_traffic,
        ];
    }

    public function headings(): array
    {
        return [
            'ID',
            'Trip ID',
            'Location X',
            'Location Y',
            'Velocity',
            'Is Traffic',
        ];
    }
}
