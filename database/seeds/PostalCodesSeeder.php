<?php

use App\PostalCode;
use Illuminate\Database\Seeder;

class PostalCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $postal_code = [
            [
                "city_id"=> "1",
                "province_id"=> "21",
                "type"=> "Kabupaten",
                "name"=> "Aceh Barat",
                "postal_code"=> "23681"
            ],
            [
                "city_id"=> "2",
                "province_id"=> "21",
                "type"=> "Kabupaten",
                "name"=> "Aceh Barat Daya",
                "postal_code"=> "23764"
            ],
            [
                "city_id"=> "3",
                "province_id"=> "21",
                "type"=> "Kabupaten",
                "name"=> "Aceh Besar",
                "postal_code"=> "23951"
            ],
            [
                "city_id"=> "4",
                "province_id"=> "21",
                "type"=> "Kabupaten",
                "name"=> "Aceh Jaya",
                "postal_code"=> "23654"
            ],
            [
                "city_id"=> "5",
                "province_id"=> "21",
                "type"=> "Kabupaten",
                "name"=> "Aceh Selatan",
                "postal_code"=> "23719"
            ],
            [
                "city_id"=> "6",
                "province_id"=> "21",
                "type"=> "Kabupaten",
                "name"=> "Aceh Singkil",
                "postal_code"=> "24785"
            ],
            [
                "city_id"=> "7",
                "province_id"=> "21",
                "type"=> "Kabupaten",
                "name"=> "Aceh Tamiang",
                "postal_code"=> "24476"
            ],
            [
                "city_id"=> "8",
                "province_id"=> "21",
                "type"=> "Kabupaten",
                "name"=> "Aceh Tengah",
                "postal_code"=> "24511"
            ],
            [
                "city_id"=> "9",
                "province_id"=> "21",
                "type"=> "Kabupaten",
                "name"=> "Aceh Tenggara",
                "postal_code"=> "24611"
            ],
            [
                "city_id"=> "10",
                "province_id"=> "21",
                "type"=> "Kabupaten",
                "name"=> "Aceh Timur",
                "postal_code"=> "24454"
            ],
            [
                "city_id"=> "11",
                "province_id"=> "21",
                "type"=> "Kabupaten",
                "name"=> "Aceh Utara",
                "postal_code"=> "24382"
            ],
            [
                "city_id"=> "12",
                "province_id"=> "32",
                "type"=> "Kabupaten",
                "name"=> "Agam",
                "postal_code"=> "26411"
            ],
            [
                "city_id"=> "13",
                "province_id"=> "23",
                "type"=> "Kabupaten",
                "name"=> "Alor",
                "postal_code"=> "85811"
            ],
            [
                "city_id"=> "14",
                "province_id"=> "19",
                "type"=> "Kota",
                "name"=> "Ambon",
                "postal_code"=> "97222"
            ],
            [
                "city_id"=> "15",
                "province_id"=> "34",
                "type"=> "Kabupaten",
                "name"=> "Asahan",
                "postal_code"=> "21214"
            ],
            [
                "city_id"=> "16",
                "province_id"=> "24",
                "type"=> "Kabupaten",
                "name"=> "Asmat",
                "postal_code"=> "99777"
            ],
            [
                "city_id"=> "17",
                "province_id"=> "1",
                "type"=> "Kabupaten",
                "name"=> "Badung",
                "postal_code"=> "80351"
            ],
            [
                "city_id"=> "18",
                "province_id"=> "13",
                "type"=> "Kabupaten",
                "name"=> "Balangan",
                "postal_code"=> "71611"
            ],
            [
                "city_id"=> "19",
                "province_id"=> "15",
                "type"=> "Kota",
                "name"=> "Balikpapan",
                "postal_code"=> "76111"
            ],
            [
                "city_id"=> "20",
                "province_id"=> "21",
                "type"=> "Kota",
                "name"=> "Banda Aceh",
                "postal_code"=> "23238"
            ],
            [
                "city_id"=> "21",
                "province_id"=> "18",
                "type"=> "Kota",
                "name"=> "Bandar Lampung",
                "postal_code"=> "35139"
            ],
            [
                "city_id"=> "22",
                "province_id"=> "9",
                "type"=> "Kabupaten",
                "name"=> "Bandung",
                "postal_code"=> "40311"
            ],
            [
                "city_id"=> "23",
                "province_id"=> "9",
                "type"=> "Kota",
                "name"=> "Bandung",
                "postal_code"=> "40111"
            ],
            [
                "city_id"=> "24",
                "province_id"=> "9",
                "type"=> "Kabupaten",
                "name"=> "Bandung Barat",
                "postal_code"=> "40721"
            ],
            [
                "city_id"=> "25",
                "province_id"=> "29",
                "type"=> "Kabupaten",
                "name"=> "Banggai",
                "postal_code"=> "94711"
            ],
        ];
  
        foreach ($postal_code as $key => $value) {
            PostalCode::insert($value);
        }
    }
}
