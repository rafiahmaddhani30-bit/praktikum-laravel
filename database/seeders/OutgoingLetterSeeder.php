<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OutgoingLetter;

class OutgoingLetterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OutgoingLetter::create([
            'nomor_surat' => 'SK-001/2026',
            'tanggal' => '2026-11-01',
            'tujuan' => 'Universitas Muhammadiyah Jember',
            'perihal' => 'Surat Undangan Rapat',
            'keterangan' => 'Undangan rapat koordinasi',
        ]);

        OutgoingLetter::create([
            'nomor_surat' => 'SK-002/2026',
            'tanggal' => '2026-11-02',
            'tujuan' => 'Dinas Pendidikan',
            'perihal' => 'Surat Permohonan Data',
            'keterangan' => 'Permohonan data pendidikan',
        ]);

        OutgoingLetter::create([
            'nomor_surat' => 'SK-003/2026',
            'tanggal' => '2026-11-03',
            'tujuan' => 'Kantor Kecamatan',
            'perihal' => 'Surat Pemberitahuan',
            'keterangan' => 'Pemberitahuan kegiatan',
        ]);
    }
}
