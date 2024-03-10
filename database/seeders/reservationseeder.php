<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class reservationseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $reservations = [
            [
                'date_debut' => '2024/02/11',
                'date_fin' => '2024/02/14',
                'id_client' => 1,
                'idpersonnel'=> 1,
                'montant' => 200, // Montant en chiffres (sans le "dh")
            ]
        ];

        foreach ($reservations as $reservation) {
            $validator = Validator::make($reservation, [
                'date_debut' => 'required|date_format:Y/m/d',
                'date_fin' => 'required|date_format:Y/m/d',
                'id_client' => 'required|integer',
                'montant' => 'required|numeric|min:0',
            ]);

            if ($validator->fails()) {
                foreach ($validator->errors()->all() as $error) {
                    echo $error . "\n";
                }
                continue;
            }

            DB::table('reservations')->insert($reservation);
        }
    }
}
