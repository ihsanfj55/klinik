<?php

namespace App\Exports;

use App\Models\Examination;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class ExaminationsMonthExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize, WithCustomStartCell, WithEvents
{
    use Exportable;

    private $row = 0;



    public function model(array $row)
    {
        ++$this->row;
    }

    public function collection()
    {
        $data = Examination::whereMonth('examination_date', \Carbon\Carbon::now()->month)->get();

        return $data;
    }

    /**
     * @var Examination $examination
     */
    public function map($examination): array
    {
        return [
            ++$this->row,
            $examination->examination_date,
            $examination->fullname,
            $examination->age,
            $examination->village,
            $examination->subdistrict,
            $examination->visit_to,
            $examination->queue_number,
        ];
    }

    public function headings(): array
    {
        return [
            'NO.',
            'Tanggal Pemeriksaan',
            'Nama Lengkap',
            'Umur',
            'Desa',
            'Kecamatan',
            'Kunjungan Ke',
            'Nomor Antrian',
        ];
    }

    public function startCell(): string
    {
        return 'A1';
    }

    /**
     * @return array
     */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function (AfterSheet $event) {

                $alphabet       = $event->sheet->getHighestDataColumn();
                $totalRow       = $event->sheet->getHighestDataRow();
                $cellRange      = 'A1:' . $alphabet . $totalRow;

                $event->sheet->getStyle($cellRange)->applyFromArray([
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        ],
                    ],
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    ],
                ])->getAlignment()->setWrapText(true);
            },
        ];
    }
}
