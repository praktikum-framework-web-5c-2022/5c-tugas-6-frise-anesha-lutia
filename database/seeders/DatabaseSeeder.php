<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Pegawai;
use App\Models\Pemilik;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Pemilik::create(
            [
                'nama' => 'Chairul Tanjung',
                'alamat_perusahaan' => 'Jakarta Pusat', 
            ]
        );

        Pemilik::create(
            [
                'nama' => 'Budi Hartono',
                'alamat_perusahaan' => 'Bandung', 
            ]
        );

        Pemilik::create(
            [
                'nama' => 'Eddy Kusnadi',
                'alamat_perusahaan' => 'Bogor', 
            ]
        );
        
        Pegawai::create(
            [
                'no_identitas' => '123456789122',
                'nama_pegawai' => 'Frise Anesha Lutia',
                'jabatan' => 'Direksi',
                'umur' => '25',
                'pemilik_id' => '1'
                ]
        );
        Pegawai::create(
            [
                'no_identitas' => '123456789123',
                'nama_pegawai' => 'Fanny Suyantoputri',
                'jabatan' => 'CFO',
                'umur' => '23',
                'pemilik_id' => '1'
                ]
        );
        Pegawai::create(
            [
                'no_identitas' => '123456789124',
                'nama_pegawai' => 'Salsabila Innayah',
                'jabatan' => 'CIO',
                'umur' => '23',
                'pemilik_id' => '1'
                ]
        );
        Pegawai::create(
            [
                'no_identitas' => '123456789125',
                'nama_pegawai' => 'Aisa Nurfajri',
                'jabatan' => 'CMO',
                'umur' => '28',
                'pemilik_id' => '2'
            ]
        );
        Pegawai::create(
            [
                'no_identitas' => '123456789126',
                'nama_pegawai' => 'Aina Salsabila',
                'jabatan' => 'COO',
                'umur' => '26',
                'pemilik_id' => '2'
                ]
        );
        Pegawai::create(
            [
                'no_identitas' => '123456789127',
                'nama_pegawai' => 'Ekra Dehia',
                'jabatan' => 'HRD',
                'umur' => '28',
                'pemilik_id' => '3'
            ]
        );
        Pegawai::create(
            [
                'no_identitas' => '123456789128',
                'nama_pegawai' => 'Farel Tearsense',
                'jabatan' => 'TI',
                'umur' => '22',
                'pemilik_id' => '2'
                ]
        );
        Pegawai::create(
            [
                'no_identitas' => '123456789129',
                'nama_pegawai' => 'Jammy Ulael',
                'jabatan' => 'CEO',
                'umur' => '22',
                'pemilik_id' => '1'
                ]
        );
        Pegawai::create(
            [
                'no_identitas' => '123456789130',
                'nama_pegawai' => 'Abid Afanda Faiz',
                'jabatan' => 'CIO',
                'umur' => '20',
                'pemilik_id' => '2'
                ]
        );
        Pegawai::create(
            [
                'no_identitas' => '123456789131',
                'nama_pegawai' => 'Danu Aldri',
                'jabatan' => 'COO',
                'umur' => '25',
                'pemilik_id' => '3'
                ]
        );
    }
}
