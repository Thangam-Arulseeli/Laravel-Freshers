<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::truncate();
        $report = fopen(public_path("data/company.csv"),"r");
        $datarow = true;
        while (($data = fgetcsv($report, 4000, ",")) !== FALSE){
            if(!$datarow){
                Company::create([
                    "cpyname" => $data[0],
                    "address" => $data[1],
                    "mailid" => $data[2]
                ]);
            }
            $datarow=false;
        } 
        fclose($report);
    }
    
}
