<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KomponenKomputerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('komponen_komputer')->insert([
            [
                'id_komponen' => 1,
                'nama_komponen' => 'AM4 Ryzen 3 3200G',
                'brand_komponen' => 'AMD',
                'id_kategori' => 1,
                'soket_komponen' => 'AM4',
                'harga_komponen' => 1019000,
                'performa_komponen' => 7128,
                'daya_komponen' => 65
            ],
            [
                'id_komponen' => 2,
                'nama_komponen' => 'AM4 Ryzen 5 4500',
                'brand_komponen' => 'AMD',
                'id_kategori' => 1,
                'soket_komponen' => 'AM4',
                'harga_komponen' => 1238000,
                'performa_komponen' => 16121,
                'daya_komponen' => 65
            ],
            [
                'id_komponen' => 3,
                'nama_komponen' => 'AM4 Ryzen 5 5500',
                'brand_komponen' => 'AMD',
                'id_kategori' => 1,
                'soket_komponen' => 'AM4',
                'harga_komponen' => 1307000,
                'performa_komponen' => 19395,
                'daya_komponen' => 65
            ],
            [
                'id_komponen' => 4,
                'nama_komponen' => 'AM4 Ryzen 5 4600G',
                'brand_komponen' => 'AMD',
                'id_kategori' => 1,
                'soket_komponen' => 'AM4',
                'harga_komponen' => 1545000,
                'performa_komponen' => 16063,
                'daya_komponen' => 65
            ],
            [
                'id_komponen' => 5,
                'nama_komponen' => 'AM4 Ryzen 5 5600',
                'brand_komponen' => 'AMD',
                'id_kategori' => 1,
                'soket_komponen' => 'AM4',
                'harga_komponen' => 1600000,
                'performa_komponen' => 21572,
                'daya_komponen' => 65
            ],
            [
                'id_komponen' => 6,
                'nama_komponen' => 'AM4 Ryzen 5 5600G',
                'brand_komponen' => 'AMD',
                'id_kategori' => 1,
                'soket_komponen' => 'AM4',
                'harga_komponen' => 1925000,
                'performa_komponen' => 19878,
                'daya_komponen' => 65
            ],
            [
                'id_komponen' => 7,
                'nama_komponen' => 'AM4 Ryzen 5 5600GT',
                'brand_komponen' => 'AMD',
                'id_kategori' => 1,
                'soket_komponen' => 'AM4',
                'harga_komponen' => 2095000,
                'performa_komponen' => 20330,
                'daya_komponen' => 65
            ],
            [
                'id_komponen' => 8,
                'nama_komponen' => 'AM4 Ryzen 7 5700X',
                'brand_komponen' => 'AMD',
                'id_kategori' => 1,
                'soket_komponen' => 'AM4',
                'harga_komponen' => 2750000,
                'performa_komponen' => 26662,
                'daya_komponen' => 65
            ],
            [
                'id_komponen' => 9,
                'nama_komponen' => 'AM4 Ryzen 7 5700G ',
                'brand_komponen' => 'AMD',
                'id_kategori' => 1,
                'soket_komponen' => 'AM4',
                'harga_komponen' => 2948000,
                'performa_komponen' => 24555,
                'daya_komponen' => 65
            ],
            [
                'id_komponen' => 10,
                'nama_komponen' => 'AM4 Ryzen 7 5700',
                'brand_komponen' => 'AMD',
                'id_kategori' => 1,
                'soket_komponen' => 'AM4',
                'harga_komponen' => 2964000,
                'performa_komponen' => 24261,
                'daya_komponen' => 65
            ],
            [
                'id_komponen' => 11,
                'nama_komponen' => 'AM4 Ryzen 7 5700X3D',
                'brand_komponen' => 'AMD',
                'id_kategori' => 1,
                'soket_komponen' => 'AM4',
                'harga_komponen' => 4030000,
                'performa_komponen' => 26339,
                'daya_komponen' => 105
            ],
            [
                'id_komponen' => 12,
                'nama_komponen' => 'Core i3 12100F - LGA1700',
                'brand_komponen' => 'Intel',
                'id_kategori' => 1,
                'soket_komponen' => 'LGA1700',
                'harga_komponen' => 1150000,
                'performa_komponen' => 14114,
                'daya_komponen' => 65
            ],
            [
                'id_komponen' => 13,
                'nama_komponen' => 'Core i3 12100 - LGA1700',
                'brand_komponen' => 'Intel',
                'id_kategori' => 1,
                'soket_komponen' => 'LGA1700',
                'harga_komponen' => 1650000,
                'performa_komponen' => 13597,
                'daya_komponen' => 65
            ],
            [
                'id_komponen' => 14,
                'nama_komponen' => 'Core i5 12400F LGA 1700',
                'brand_komponen' => 'Intel',
                'id_kategori' => 1,
                'soket_komponen' => 'LGA1700',
                'harga_komponen' => 1680000,
                'performa_komponen' => 19528,
                'daya_komponen' => 65
            ],
            [
                'id_komponen' => 15,
                'nama_komponen' => 'Core i5 12400 LGA 1700',
                'brand_komponen' => 'Intel',
                'id_kategori' => 1,
                'soket_komponen' => 'LGA1700',
                'harga_komponen' => 2150000,
                'performa_komponen' => 19368,
                'daya_komponen' => 65
            ],
            [
                'id_komponen' => 16,
                'nama_komponen' => 'Core i5 13400F - LGA1700',
                'brand_komponen' => 'Intel',
                'id_kategori' => 1,
                'soket_komponen' => 'LGA1700',
                'harga_komponen' => 2630000,
                'performa_komponen' => 25177,
                'daya_komponen' => 65
            ],
            [
                'id_komponen' => 17,
                'nama_komponen' => 'Core i7 12700F - LGA1700',
                'brand_komponen' => 'Intel',
                'id_kategori' => 1,
                'soket_komponen' => 'LGA1700',
                'harga_komponen' => 3750000,
                'performa_komponen' => 30684,
                'daya_komponen' => 65
            ],
            [
                'id_komponen' => 18,
                'nama_komponen' => 'Core i7 12700 - LGA1700',
                'brand_komponen' => 'Intel',
                'id_kategori' => 1,
                'soket_komponen' => 'LGA1700',
                'harga_komponen' => 4200000,
                'performa_komponen' => 30783,
                'daya_komponen' => 65
            ],
            [
                'id_komponen' => 19,
                'nama_komponen' => 'Core i5 14600KF - LGA1700',
                'brand_komponen' => 'Intel',
                'id_kategori' => 1,
                'soket_komponen' => 'LGA1700',
                'harga_komponen' => 4200000,
                'performa_komponen' => 39305,
                'daya_komponen' => 125
            ],
            [
                'id_komponen' => 20,
                'nama_komponen' => 'Core i7 14700F - LGA1700',
                'brand_komponen' => 'Intel',
                'id_kategori' => 1,
                'soket_komponen' => 'LGA1700',
                'harga_komponen' => 5350000,
                'performa_komponen' => 43746,
                'daya_komponen' => 65
            ],
            [
                'id_komponen' => 21,
                'nama_komponen' => 'Core i7 14700KF - LGA1700',
                'brand_komponen' => 'Intel',
                'id_kategori' => 1,
                'soket_komponen' => 'LGA1700',
                'harga_komponen' => 5950000,
                'performa_komponen' => 53348,
                'daya_komponen' => 125
            ],
            [
                'id_komponen' => 22,
                'nama_komponen' => 'Core i9 14900KF - LGA1700',
                'brand_komponen' => 'Intel',
                'id_kategori' => 1,
                'soket_komponen' => 'LGA1700',
                'harga_komponen' => 8500000,
                'performa_komponen' => 59486,
                'daya_komponen' => 125
            ],
            [
                'id_komponen' => 23,
                'nama_komponen' => 'Motherboard Asus PRIME A520M-K',
                'brand_komponen' => 'Asus ',
                'id_kategori' => 2,
                'soket_komponen' => 'AM4',
                'harga_komponen' => 908000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 24,
                'nama_komponen' => 'Motherboard Gigabyte B450M K ',
                'brand_komponen' => 'Gigabyte ',
                'id_kategori' => 2,
                'soket_komponen' => 'AM4',
                'harga_komponen' => 1016000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 25,
                'nama_komponen' => 'Motherboard Asrock A520M/ac',
                'brand_komponen' => 'Asrock ',
                'id_kategori' => 2,
                'soket_komponen' => 'AM4',
                'harga_komponen' => 1032000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 26,
                'nama_komponen' => 'Motherboard Asus PRIME B450M-A',
                'brand_komponen' => 'Asus ',
                'id_kategori' => 2,
                'soket_komponen' => 'AM4',
                'harga_komponen' => 1092000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 27,
                'nama_komponen' => 'Motherboard Gigabyte B550M DS3H',
                'brand_komponen' => 'Gigabyte ',
                'id_kategori' => 2,
                'soket_komponen' => 'AM4',
                'harga_komponen' => 1508000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 28,
                'nama_komponen' => 'Motherboard Asrock B550M WiFi SE',
                'brand_komponen' => 'Asrock ',
                'id_kategori' => 2,
                'soket_komponen' => 'AM4',
                'harga_komponen' => 1688000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 29,
                'nama_komponen' => 'Motherboard Asus PRIME B550M-K',
                'brand_komponen' => 'Asus ',
                'id_kategori' => 2,
                'soket_komponen' => 'AM4',
                'harga_komponen' => 1355000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 30,
                'nama_komponen' => 'Motherboard Asrock B550M Phantom Gaming 4',
                'brand_komponen' => 'Asrock ',
                'id_kategori' => 2,
                'soket_komponen' => 'AM4',
                'harga_komponen' => 1438000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 31,
                'nama_komponen' => 'Motherboard Asrock B550M Pro SE',
                'brand_komponen' => 'Asrock ',
                'id_kategori' => 2,
                'soket_komponen' => 'AM4',
                'harga_komponen' => 1588000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 32,
                'nama_komponen' => 'Motherboard Asrock B550m Steel Legend',
                'brand_komponen' => 'Asrock ',
                'id_kategori' => 2,
                'soket_komponen' => 'AM4',
                'harga_komponen' => 2200000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 33,
                'nama_komponen' => 'Motherboard Asrock H610M-H2',
                'brand_komponen' => 'Asrock ',
                'id_kategori' => 2,
                'soket_komponen' => 'LGA1700',
                'harga_komponen' => 1000000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 34,
                'nama_komponen' => 'Motherboard Asrock H610M-HVS',
                'brand_komponen' => 'Asrock ',
                'id_kategori' => 2,
                'soket_komponen' => 'LGA1700',
                'harga_komponen' => 1020000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 35,
                'nama_komponen' => 'Motherboard Gigabyte H610M K',
                'brand_komponen' => 'Gigabyte ',
                'id_kategori' => 2,
                'soket_komponen' => 'LGA1700',
                'harga_komponen' => 1085000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 36,
                'nama_komponen' => 'Motherboard Asus PRIME H610M-K',
                'brand_komponen' => 'Asus ',
                'id_kategori' => 2,
                'soket_komponen' => 'LGA1700',
                'harga_komponen' => 1110000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 37,
                'nama_komponen' => 'Motherboard Gigabyte B760M',
                'brand_komponen' => 'Gigabyte ',
                'id_kategori' => 2,
                'soket_komponen' => 'LGA1700',
                'harga_komponen' => 1655000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 38,
                'nama_komponen' => 'Motherboard Asrock B760M-HDV',
                'brand_komponen' => 'Asrock ',
                'id_kategori' => 2,
                'soket_komponen' => 'LGA1700',
                'harga_komponen' => 1666000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 39,
                'nama_komponen' => 'Motherboard Asrock B760M PG',
                'brand_komponen' => 'Asrock ',
                'id_kategori' => 2,
                'soket_komponen' => 'LGA1700',
                'harga_komponen' => 1730000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 40,
                'nama_komponen' => 'Motherboard Gigabyte B760M DS3H',
                'brand_komponen' => 'Gigabyte ',
                'id_kategori' => 2,
                'soket_komponen' => 'LGA1700',
                'harga_komponen' => 1850000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 41,
                'nama_komponen' => 'Motherboard Gigabyte B760M DS3H AX',
                'brand_komponen' => 'Gigabyte ',
                'id_kategori' => 2,
                'soket_komponen' => 'LGA1700',
                'harga_komponen' => 2085000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 42,
                'nama_komponen' => 'NVIDIA GT210 1GB DDR3',
                'brand_komponen' => 'Midasforce',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 288000,
                'performa_komponen' => 115,
                'daya_komponen' => 21
            ],
            [
                'id_komponen' => 43,
                'nama_komponen' => 'VGA GeForce GT610 2GB',
                'brand_komponen' => 'QWERTY',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 299000,
                'performa_komponen' => 311,
                'daya_komponen' => 30
            ],
            [
                'id_komponen' => 44,
                'nama_komponen' => 'VGA NVIDIA GT610 2GB',
                'brand_komponen' => 'Midasforce',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 340000,
                'performa_komponen' => 311,
                'daya_komponen' => 30
            ],
            [
                'id_komponen' => 45,
                'nama_komponen' => 'VGA NVIDIA GT730 2GB',
                'brand_komponen' => 'Midasforce',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 480000,
                'performa_komponen' => 835,
                'daya_komponen' => 65
            ],
            [
                'id_komponen' => 46,
                'nama_komponen' => 'VGA GeForce GT730 4GB',
                'brand_komponen' => 'QWERTY',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 539000,
                'performa_komponen' => 835,
                'daya_komponen' => 65
            ],
            [
                'id_komponen' => 47,
                'nama_komponen' => 'VGA GeForce GT 710 Silent 2GB',
                'brand_komponen' => 'ASUS',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 570000,
                'performa_komponen' => 628,
                'daya_komponen' => 20
            ],
            [
                'id_komponen' => 48,
                'nama_komponen' => 'VGA NVIDIA GT730 4GB',
                'brand_komponen' => 'Midasforce',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 600000,
                'performa_komponen' => 835,
                'daya_komponen' => 65
            ],
            [
                'id_komponen' => 49,
                'nama_komponen' => 'VGA GeForce GT 730 2GB',
                'brand_komponen' => 'ASUS',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 731000,
                'performa_komponen' => 835,
                'daya_komponen' => 65
            ],
            [
                'id_komponen' => 50,
                'nama_komponen' => 'NVIDIA GTX 750TI 4GB',
                'brand_komponen' => 'Midasforce',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 990000,
                'performa_komponen' => 3900,
                'daya_komponen' => 65
            ],
            [
                'id_komponen' => 51,
                'nama_komponen' => 'Radeon RX 550 4GB',
                'brand_komponen' => 'Asrock',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 1130000,
                'performa_komponen' => 2737,
                'daya_komponen' => 75
            ],
            [
                'id_komponen' => 52,
                'nama_komponen' => 'VGA Radeon RX580 8GB',
                'brand_komponen' => 'QWERTY',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 1419000,
                'performa_komponen' => 8856,
                'daya_komponen' => 250
            ],
            [
                'id_komponen' => 53,
                'nama_komponen' => 'Radeon RX 580 8GB',
                'brand_komponen' => 'Midasforce',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 1480000,
                'performa_komponen' => 8856,
                'daya_komponen' => 250
            ],
            [
                'id_komponen' => 54,
                'nama_komponen' => 'GTX 1050TI 4GB',
                'brand_komponen' => 'Midasforce',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 1950000,
                'performa_komponen' => 6314,
                'daya_komponen' => 120
            ],
            [
                'id_komponen' => 55,
                'nama_komponen' => 'Intel Arc A380 Low Profile 6GB',
                'brand_komponen' => 'Asrock',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 2000000,
                'performa_komponen' => 6211,
                'daya_komponen' => 75
            ],
            [
                'id_komponen' => 56,
                'nama_komponen' => 'GeForce RTX 3050 6GB',
                'brand_komponen' => 'PNY',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 2742000,
                'performa_komponen' => 10634,
                'daya_komponen' => 150
            ],
            [
                'id_komponen' => 57,
                'nama_komponen' => 'GeForce RTX 3050 OC Edition 6GB',
                'brand_komponen' => 'ASUS',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 3155000,
                'performa_komponen' => 10634,
                'daya_komponen' => 150
            ],
            [
                'id_komponen' => 58,
                'nama_komponen' => 'GeForce RTX 3050 WINDFORCE OC 6G',
                'brand_komponen' => 'Gigabyte',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 3238000,
                'performa_komponen' => 10634,
                'daya_komponen' => 150
            ],
            [
                'id_komponen' => 59,
                'nama_komponen' => 'Radeon RX 6600 Challenger D 8GB',
                'brand_komponen' => 'Asrock',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 3316000,
                'performa_komponen' => 15148,
                'daya_komponen' => 140
            ],
            [
                'id_komponen' => 60,
                'nama_komponen' => 'GeForce RTX 4060 8GB',
                'brand_komponen' => 'PNY',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 4690000,
                'performa_komponen' => 19882,
                'daya_komponen' => 130
            ],
            [
                'id_komponen' => 61,
                'nama_komponen' => 'GeForce RTX 3060 WINDFORCE OC 12G',
                'brand_komponen' => 'Gigabyte',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 4925000,
                'performa_komponen' => 17000,
                'daya_komponen' => 180
            ],
            [
                'id_komponen' => 62,
                'nama_komponen' => 'GeForce RTX 4060 WINDFORCE OC 8G',
                'brand_komponen' => 'Gigabyte',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 5365000,
                'performa_komponen' => 19882,
                'daya_komponen' => 130
            ],
            [
                'id_komponen' => 63,
                'nama_komponen' => 'GeForce RTX 4060 EVO OC Edition 8GB',
                'brand_komponen' => 'ASUS',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 5380000,
                'performa_komponen' => 19882,
                'daya_komponen' => 130
            ],
            [
                'id_komponen' => 64,
                'nama_komponen' => 'GeForce RTX 4060 White OC Edition 8GB',
                'brand_komponen' => 'ASUS',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 5435000,
                'performa_komponen' => 19882,
                'daya_komponen' => 130
            ],
            [
                'id_komponen' => 65,
                'nama_komponen' => 'GeForce RTX 4060 EAGLE OC 8G',
                'brand_komponen' => 'Gigabyte',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 5700000,
                'performa_komponen' => 19882,
                'daya_komponen' => 130
            ],
            [
                'id_komponen' => 66,
                'nama_komponen' => 'GeForce RTXÂ­Â­ 4060 GAMING OC 8G',
                'brand_komponen' => 'Gigabyte',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 5860000,
                'performa_komponen' => 19882,
                'daya_komponen' => 130
            ],
            [
                'id_komponen' => 67,
                'nama_komponen' => 'GeForce RTX 4070 SUPER WINDFORCE OC 12G',
                'brand_komponen' => 'Gigabyte',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 10700000,
                'performa_komponen' => 30191,
                'daya_komponen' => 250
            ],
            [
                'id_komponen' => 68,
                'nama_komponen' => 'GeForce RTX 4070 SUPER OC Edition 12GB',
                'brand_komponen' => 'ASUS',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 11000000,
                'performa_komponen' => 30191,
                'daya_komponen' => 250
            ],
            [
                'id_komponen' => 69,
                'nama_komponen' => 'GeForce RTX 4070 Ti SUPER WINDFORCE OC 16G',
                'brand_komponen' => 'Gigabyte',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 14840000,
                'performa_komponen' => 31615,
                'daya_komponen' => 300
            ],
            [
                'id_komponen' => 70,
                'nama_komponen' => 'GeForce RTX 4090 GAMING OC 24G',
                'brand_komponen' => 'Gigabyte',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 32000000,
                'performa_komponen' => 38592,
                'daya_komponen' => 500
            ],
            [
                'id_komponen' => 71,
                'nama_komponen' => 'GeForce RTX 4090 MASTER 24G',
                'brand_komponen' => 'Gigabyte',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 33000000,
                'performa_komponen' => 38592,
                'daya_komponen' => 500
            ],
            [
                'id_komponen' => 72,
                'nama_komponen' => 'Radeon RX 7700 XT Steel Legend 12GB OC',
                'brand_komponen' => 'Asrock',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 8280000,
                'performa_komponen' => 22231,
                'daya_komponen' => 252
            ],
            [
                'id_komponen' => 73,
                'nama_komponen' => 'Radeon RX 7800 XT Steel Legend 16GB OC',
                'brand_komponen' => 'Asrock',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 9250000,
                'performa_komponen' => 24234,
                'daya_komponen' => 288
            ],
            [
                'id_komponen' => 74,
                'nama_komponen' => 'Radeon RX 7600 Challenger 8GB OC',
                'brand_komponen' => 'Asrock',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 4460000,
                'performa_komponen' => 16466,
                'daya_komponen' => 185
            ],
            [
                'id_komponen' => 75,
                'nama_komponen' => 'Radeon RX 7800 XT Challenger 16GB OC',
                'brand_komponen' => 'Asrock',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 8980000,
                'performa_komponen' => 24234,
                'daya_komponen' => 288
            ],
            [
                'id_komponen' => 76,
                'nama_komponen' => 'Radeon RX 550 4GB',
                'brand_komponen' => 'Midasforce',
                'id_kategori' => 3,
                'soket_komponen' => 'nan',
                'harga_komponen' => 949000,
                'performa_komponen' => 2737,
                'daya_komponen' => 65
            ],
            [
                'id_komponen' => 77,
                'nama_komponen' => 'MCQUEST DDR4 8GB 3200Mhz',
                'brand_komponen' => 'MCQUEST',
                'id_kategori' => 4,
                'soket_komponen' => 'nan',
                'harga_komponen' => 189000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 78,
                'nama_komponen' => 'Kingston DDR4 8GB 3200Mhz',
                'brand_komponen' => 'Kingston',
                'id_kategori' => 4,
                'soket_komponen' => 'nan',
                'harga_komponen' => 260000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 79,
                'nama_komponen' => 'Kingston Fury DDR4 8GB 3200Mhz',
                'brand_komponen' => 'Kingston Fury',
                'id_kategori' => 4,
                'soket_komponen' => 'nan',
                'harga_komponen' => 280000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 80,
                'nama_komponen' => 'MCQUEST DDR4 16GB 3200Mhz',
                'brand_komponen' => 'MCQUEST',
                'id_kategori' => 4,
                'soket_komponen' => 'nan',
                'harga_komponen' => 399000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 81,
                'nama_komponen' => 'Kingston Fury DDR4 16GB 3200Mhz',
                'brand_komponen' => 'Kingston Fury',
                'id_kategori' => 4,
                'soket_komponen' => 'nan',
                'harga_komponen' => 490000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 82,
                'nama_komponen' => 'Kingston Fury DDR4 16GB (8x2GB) 3200MHz',
                'brand_komponen' => 'Kingston Fury',
                'id_kategori' => 4,
                'soket_komponen' => 'nan',
                'harga_komponen' => 560000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 83,
                'nama_komponen' => 'Kingston Fury DDR4 16GB (8x2GB) 3200MHz',
                'brand_komponen' => 'Kingston Fury',
                'id_kategori' => 4,
                'soket_komponen' => 'nan',
                'harga_komponen' => 710000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 84,
                'nama_komponen' => 'Kingston Fury DDR4 16GB (8x2GB) 3200MHz',
                'brand_komponen' => 'Kingston Fury',
                'id_kategori' => 4,
                'soket_komponen' => 'nan',
                'harga_komponen' => 710000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 85,
                'nama_komponen' => 'Kingston Fury DDR4 32gb (16gb x 2) 3200mhz',
                'brand_komponen' => 'Kingston Fury',
                'id_kategori' => 4,
                'soket_komponen' => 'nan',
                'harga_komponen' => 980000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 86,
                'nama_komponen' => 'Kingston Fury DDR4 32gb (16gb x 2) 3200mhz',
                'brand_komponen' => 'Kingston Fury',
                'id_kategori' => 4,
                'soket_komponen' => 'nan',
                'harga_komponen' => 1130000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 87,
                'nama_komponen' => 'Hard Disk Seagate Barracuda 25 Thin 1Tb MFI',
                'brand_komponen' => 'Seagate',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 873000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 88,
                'nama_komponen' => 'Hard Disk Seagate Barracuda 35 Desktop 4Tb MFI',
                'brand_komponen' => 'Seagate',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 1748000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 89,
                'nama_komponen' => 'Seagate Barracuda 35 Desktop 8TB MFI',
                'brand_komponen' => 'Seagate',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 3495000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 90,
                'nama_komponen' => 'Seagate Barracuda 35 Desktop 6Tb MFI',
                'brand_komponen' => 'Seagate',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 2742000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 91,
                'nama_komponen' => 'Midasforce SSD Superlightning 120GB',
                'brand_komponen' => 'Midasforce',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 145000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 92,
                'nama_komponen' => 'Midasforce SSD Superlightning 128GB',
                'brand_komponen' => 'Midasforce',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 157000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 93,
                'nama_komponen' => 'Midasforce SSD M.2 SATA3 Hyper Lightning 128GB',
                'brand_komponen' => 'Midasforce',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 157000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 94,
                'nama_komponen' => 'Ramos SSD SATA 128GB Black Gold',
                'brand_komponen' => 'Ramos ',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 160000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 95,
                'nama_komponen' => 'Midasforce SSD NVMe Lightning Max 2280 - 128GB',
                'brand_komponen' => 'Midasforce',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 193000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 96,
                'nama_komponen' => 'Midasforce SSD Superlightning 240GB',
                'brand_komponen' => 'Midasforce',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 225000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 97,
                'nama_komponen' => 'Midasforce SSD Superlightning 256GB',
                'brand_komponen' => 'Midasforce',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 245000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 98,
                'nama_komponen' => 'Midasforce SSD M.2 SATA3 Hyper Lightning 256GB',
                'brand_komponen' => 'Midasforce',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 245000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 99,
                'nama_komponen' => 'Ramos SSD SATA 256GB Black Gold',
                'brand_komponen' => 'Ramos ',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 250000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 100,
                'nama_komponen' => 'Ramos NVMe SSD 256GB Black Gold',
                'brand_komponen' => 'Ramos ',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 285000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 101,
                'nama_komponen' => 'Kingston SSD A400 240gb',
                'brand_komponen' => 'Kingston',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 355000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 102,
                'nama_komponen' => 'Kingston NV2 PCIe 4.0 NVMe SSD - 250GB',
                'brand_komponen' => 'Kingston',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 395000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 103,
                'nama_komponen' => 'Midasforce SSD Superlightning 512GB',
                'brand_komponen' => 'Midasforce',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 445000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 104,
                'nama_komponen' => 'Ramos SSD SATA 512GB Black Gold',
                'brand_komponen' => 'Ramos ',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 450000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 105,
                'nama_komponen' => 'Ramos NVMe SSD 512GB Black Gold',
                'brand_komponen' => 'Ramos ',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 480000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 106,
                'nama_komponen' => 'Midasforce SSD NVMe Lightning Max 2280 - 512GB',
                'brand_komponen' => 'Midasforce',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 485000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 107,
                'nama_komponen' => 'Kingston SSD A400 480gb',
                'brand_komponen' => 'Kingston',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 525000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 108,
                'nama_komponen' => 'Kingston NV2 PCIe 4.0 NVMe SSD - 500GB',
                'brand_komponen' => 'Kingston',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 560000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 109,
                'nama_komponen' => 'Midasforce SSD NVMe PCIe Gen 3 Lightning Max 2242 - 512GB',
                'brand_komponen' => 'Midasforce',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 575000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 110,
                'nama_komponen' => 'Samsung SSD 870 EVO 250GB',
                'brand_komponen' => 'Samsung',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 670000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 111,
                'nama_komponen' => 'Seagate Barracuda PCIe 4.0 NVME SSD 500GB',
                'brand_komponen' => 'Seagate',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 739000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 112,
                'nama_komponen' => 'Midasforce SSD NVMe PCIe Gen 4 Lightning Max 2230 - 512GB',
                'brand_komponen' => 'Midasforce',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 780000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 113,
                'nama_komponen' => 'Ramos NVMe SSD 1TB Black Gold',
                'brand_komponen' => 'Ramos ',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 790000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 114,
                'nama_komponen' => 'Midasforce SSD Superlightning 1TB',
                'brand_komponen' => 'Midasforce',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 825000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 115,
                'nama_komponen' => 'Ramos SSD SATA 1TB Black Gold',
                'brand_komponen' => 'Ramos ',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 825000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 116,
                'nama_komponen' => 'Kingston NV2 PCIe 4.0 NVMe SSD - 1TB',
                'brand_komponen' => 'Kingston',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 830000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 117,
                'nama_komponen' => 'Samsung SSD 980 PCIe 3.0 NVMe 500GB',
                'brand_komponen' => 'Samsung',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 840000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 118,
                'nama_komponen' => 'Midasforce SSD NVMe Lightning Max 2280 - 1TB',
                'brand_komponen' => 'Midasforce',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 858000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 119,
                'nama_komponen' => 'Samsung SSD 870 EVO 500GB',
                'brand_komponen' => 'Samsung',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 860000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 120,
                'nama_komponen' => 'Midasforce SSD NVMe PCIe Gen 3 Lightning Max 2242 - 1TB',
                'brand_komponen' => 'Midasforce',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 1050000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 121,
                'nama_komponen' => 'Midasforce SSD NVMe PCIe Gen 4 Lightning Max 2230 - 1TB',
                'brand_komponen' => 'Midasforce',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 1180000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 122,
                'nama_komponen' => 'Seagate Barracuda PCIe 4.0 NVME SSD 1TB',
                'brand_komponen' => 'Seagate',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 1196000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 123,
                'nama_komponen' => 'Midasforce Midas Force SSD Superlightning 2TB',
                'brand_komponen' => 'Midasforce',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 1600000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 124,
                'nama_komponen' => 'Kingston NV2 PCIe 4.0 NVMe SSD - 2TB',
                'brand_komponen' => 'Kingston',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 1720000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 125,
                'nama_komponen' => 'Samsung SSD 980 PCIe 3.0 NVMe 1TB',
                'brand_komponen' => 'Samsung',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 2050000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 126,
                'nama_komponen' => 'Samsung SSD 990 EVO NVMe 5.0 - 1TB',
                'brand_komponen' => 'Samsung',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 2170000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 127,
                'nama_komponen' => 'Samsung SSD 990 EVO NVMe 5.0 - 2TB',
                'brand_komponen' => 'Samsung',
                'id_kategori' => 5,
                'soket_komponen' => 'nan',
                'harga_komponen' => 3485000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 128,
                'nama_komponen' => 'Power Supply United 400W',
                'brand_komponen' => 'Aerocool ',
                'id_kategori' => 6,
                'soket_komponen' => 'nan',
                'harga_komponen' => 375000,
                'performa_komponen' => 0,
                'daya_komponen' => 400
            ],
            [
                'id_komponen' => 129,
                'nama_komponen' => 'Power Supply KF550 550w',
                'brand_komponen' => 'PCCOOLER ',
                'id_kategori' => 6,
                'soket_komponen' => 'nan',
                'harga_komponen' => 472000,
                'performa_komponen' => 0,
                'daya_komponen' => 550
            ],
            [
                'id_komponen' => 130,
                'nama_komponen' => 'Power Supply Lux 550w',
                'brand_komponen' => 'AeroCool ',
                'id_kategori' => 6,
                'soket_komponen' => 'nan',
                'harga_komponen' => 500000,
                'performa_komponen' => 0,
                'daya_komponen' => 550
            ],
            [
                'id_komponen' => 131,
                'nama_komponen' => 'Power Supply KF650 650w',
                'brand_komponen' => 'PCCOOLER',
                'id_kategori' => 6,
                'soket_komponen' => 'nan',
                'harga_komponen' => 528000,
                'performa_komponen' => 0,
                'daya_komponen' => 650
            ],
            [
                'id_komponen' => 132,
                'nama_komponen' => 'Power Supply Lux RGB 550w',
                'brand_komponen' => 'AeroCool ',
                'id_kategori' => 6,
                'soket_komponen' => 'nan',
                'harga_komponen' => 545000,
                'performa_komponen' => 0,
                'daya_komponen' => 550
            ],
            [
                'id_komponen' => 133,
                'nama_komponen' => 'Power Supply LUX 650W Bronze',
                'brand_komponen' => 'AeroCool ',
                'id_kategori' => 6,
                'soket_komponen' => 'nan',
                'harga_komponen' => 590000,
                'performa_komponen' => 0,
                'daya_komponen' => 650
            ],
            [
                'id_komponen' => 134,
                'nama_komponen' => 'Power Supply 500W Bronze',
                'brand_komponen' => 'EVGA ',
                'id_kategori' => 6,
                'soket_komponen' => 'nan',
                'harga_komponen' => 599000,
                'performa_komponen' => 0,
                'daya_komponen' => 500
            ],
            [
                'id_komponen' => 135,
                'nama_komponen' => 'Power Supply ELITE NEX PN600W',
                'brand_komponen' => 'Cooler Master',
                'id_kategori' => 6,
                'soket_komponen' => 'nan',
                'harga_komponen' => 610000,
                'performa_komponen' => 0,
                'daya_komponen' => 600
            ],
            [
                'id_komponen' => 136,
                'nama_komponen' => 'Power Supply KG550W Bronze',
                'brand_komponen' => 'PCCOOLER',
                'id_kategori' => 6,
                'soket_komponen' => 'nan',
                'harga_komponen' => 617000,
                'performa_komponen' => 0,
                'daya_komponen' => 550
            ],
            [
                'id_komponen' => 137,
                'nama_komponen' => 'Power Supply ELITE NEX WHITE 500W',
                'brand_komponen' => 'Cooler Master',
                'id_kategori' => 6,
                'soket_komponen' => 'nan',
                'harga_komponen' => 626000,
                'performa_komponen' => 0,
                'daya_komponen' => 500
            ],
            [
                'id_komponen' => 138,
                'nama_komponen' => 'Power Supply LUX RGB M 650W BRONZE',
                'brand_komponen' => 'AeroCool ',
                'id_kategori' => 6,
                'soket_komponen' => 'nan',
                'harga_komponen' => 640000,
                'performa_komponen' => 0,
                'daya_komponen' => 650
            ],
            [
                'id_komponen' => 139,
                'nama_komponen' => 'Power Supply LUX 750W BRONZE',
                'brand_komponen' => 'AeroCool ',
                'id_kategori' => 6,
                'soket_komponen' => 'nan',
                'harga_komponen' => 650000,
                'performa_komponen' => 0,
                'daya_komponen' => 750
            ],
            [
                'id_komponen' => 140,
                'nama_komponen' => 'Power Supply 650W',
                'brand_komponen' => 'DeepCool',
                'id_kategori' => 6,
                'soket_komponen' => 'nan',
                'harga_komponen' => 690000,
                'performa_komponen' => 0,
                'daya_komponen' => 650
            ],
            [
                'id_komponen' => 141,
                'nama_komponen' => 'Power Supply KG650 650W Bronze',
                'brand_komponen' => 'PCCOOLER ',
                'id_kategori' => 6,
                'soket_komponen' => 'nan',
                'harga_komponen' => 699000,
                'performa_komponen' => 0,
                'daya_komponen' => 650
            ],
            [
                'id_komponen' => 142,
                'nama_komponen' => 'Power Supply ELITE NEX WHITE 600W',
                'brand_komponen' => 'Cooler Master',
                'id_kategori' => 6,
                'soket_komponen' => 'nan',
                'harga_komponen' => 705000,
                'performa_komponen' => 0,
                'daya_komponen' => 600
            ],
            [
                'id_komponen' => 143,
                'nama_komponen' => 'Power Supply AC650 Bronze 650W',
                'brand_komponen' => 'Acer',
                'id_kategori' => 6,
                'soket_komponen' => 'nan',
                'harga_komponen' => 729000,
                'performa_komponen' => 0,
                'daya_komponen' => 650
            ],
            [
                'id_komponen' => 144,
                'nama_komponen' => 'Power Supply AC750 Bronze 750W',
                'brand_komponen' => 'Acer',
                'id_kategori' => 6,
                'soket_komponen' => 'nan',
                'harga_komponen' => 829000,
                'performa_komponen' => 0,
                'daya_komponen' => 750
            ],
            [
                'id_komponen' => 145,
                'nama_komponen' => 'Power Supply AC1000 Gold 1000W',
                'brand_komponen' => 'Acer',
                'id_kategori' => 6,
                'soket_komponen' => 'nan',
                'harga_komponen' => 1199000,
                'performa_komponen' => 0,
                'daya_komponen' => 1000
            ],
            [
                'id_komponen' => 146,
                'nama_komponen' => 'Power Supply SuperNOVA Gold 750W',
                'brand_komponen' => 'EVGA ',
                'id_kategori' => 6,
                'soket_komponen' => 'nan',
                'harga_komponen' => 1450000,
                'performa_komponen' => 0,
                'daya_komponen' => 750
            ],
            [
                'id_komponen' => 147,
                'nama_komponen' => 'Power Supply CENTURY G5 850W Gold',
                'brand_komponen' => 'Montech',
                'id_kategori' => 6,
                'soket_komponen' => 'nan',
                'harga_komponen' => 1799000,
                'performa_komponen' => 0,
                'daya_komponen' => 850
            ],
            [
                'id_komponen' => 148,
                'nama_komponen' => 'Aerocool Casing CS-108',
                'brand_komponen' => 'Aerocool',
                'id_kategori' => 7,
                'soket_komponen' => 'nan',
                'harga_komponen' => 315000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 149,
                'nama_komponen' => 'Acer Casing PC Gaming U300 - Black',
                'brand_komponen' => 'Acer',
                'id_kategori' => 7,
                'soket_komponen' => 'nan',
                'harga_komponen' => 329000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 150,
                'nama_komponen' => 'Acer Casing PC Gaming U300 - White',
                'brand_komponen' => 'Acer',
                'id_kategori' => 7,
                'soket_komponen' => 'nan',
                'harga_komponen' => 339000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 151,
                'nama_komponen' => 'Aerocool Casing Carbonite',
                'brand_komponen' => 'Aerocool',
                'id_kategori' => 7,
                'soket_komponen' => 'nan',
                'harga_komponen' => 370000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 152,
                'nama_komponen' => 'Digital Alliance N50S Gaming Case - Black',
                'brand_komponen' => 'Digital Alliance',
                'id_kategori' => 7,
                'soket_komponen' => 'nan',
                'harga_komponen' => 399000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 153,
                'nama_komponen' => 'Digital Alliance N50S Gaming Case - White',
                'brand_komponen' => 'Digital Alliance',
                'id_kategori' => 7,
                'soket_komponen' => 'nan',
                'harga_komponen' => 399000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 154,
                'nama_komponen' => 'Aerocool Casing CS-111 V1',
                'brand_komponen' => 'Aerocool',
                'id_kategori' => 7,
                'soket_komponen' => 'nan',
                'harga_komponen' => 410000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 155,
                'nama_komponen' => 'Acer Casing PC Gaming U351 - Black',
                'brand_komponen' => 'Acer',
                'id_kategori' => 7,
                'soket_komponen' => 'nan',
                'harga_komponen' => 419000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 156,
                'nama_komponen' => 'Acer Casing PC Gaming U320 - Black',
                'brand_komponen' => 'Acer',
                'id_kategori' => 7,
                'soket_komponen' => 'nan',
                'harga_komponen' => 429000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 157,
                'nama_komponen' => 'Acer Casing PC Gaming U351 - White',
                'brand_komponen' => 'Acer',
                'id_kategori' => 7,
                'soket_komponen' => 'nan',
                'harga_komponen' => 429000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 158,
                'nama_komponen' => 'PCCOOLER R400 ARGB Air Cooler Black',
                'brand_komponen' => 'PCCOOLER',
                'id_kategori' => 8,
                'soket_komponen' => 'nan',
                'harga_komponen' => 210000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 159,
                'nama_komponen' => 'Cooler Master HYPER T200 CPU Cooler',
                'brand_komponen' => 'Cooler Master',
                'id_kategori' => 8,
                'soket_komponen' => 'nan',
                'harga_komponen' => 229000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 160,
                'nama_komponen' => 'PCCOOLER R400 ARGB Compact Air Cooler White',
                'brand_komponen' => 'PCCOOLER',
                'id_kategori' => 8,
                'soket_komponen' => 'nan',
                'harga_komponen' => 230000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 161,
                'nama_komponen' => 'PCCOOLER Paladin EX400 ARGB Air Cooler White',
                'brand_komponen' => 'PCCOOLER',
                'id_kategori' => 8,
                'soket_komponen' => 'nan',
                'harga_komponen' => 279000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 162,
                'nama_komponen' => 'PCCOOLER Paladin EX400 ARGB Air Cooler Black',
                'brand_komponen' => 'PCCOOLER',
                'id_kategori' => 8,
                'soket_komponen' => 'nan',
                'harga_komponen' => 279000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 163,
                'nama_komponen' => 'Cooler Master Hyper 212 Spectrum V3 CPU Air Cooler',
                'brand_komponen' => 'Cooler Master',
                'id_kategori' => 8,
                'soket_komponen' => 'nan',
                'harga_komponen' => 295000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 164,
                'nama_komponen' => 'PCCOOLER RT400 Digital ARGB Air Cooler Black',
                'brand_komponen' => 'PCCOOLER',
                'id_kategori' => 8,
                'soket_komponen' => 'nan',
                'harga_komponen' => 379000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 165,
                'nama_komponen' => 'Cooler Master Fan Proc HYPER 212 HALO WHITE',
                'brand_komponen' => 'Cooler Master',
                'id_kategori' => 8,
                'soket_komponen' => 'nan',
                'harga_komponen' => 395000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 166,
                'nama_komponen' => 'Cooler Master Hyper 212 Halo Black CPU Cooler',
                'brand_komponen' => 'Cooler Master',
                'id_kategori' => 8,
                'soket_komponen' => 'nan',
                'harga_komponen' => 395000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 167,
                'nama_komponen' => 'PCCOOLER RT500 Digital Air Cooler Black',
                'brand_komponen' => 'PCCOOLER',
                'id_kategori' => 8,
                'soket_komponen' => 'nan',
                'harga_komponen' => 399000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 168,
                'nama_komponen' => 'PCCOOLER RT500 Digital ARGB Air Cooler Black',
                'brand_komponen' => 'PCCOOLER',
                'id_kategori' => 8,
                'soket_komponen' => 'nan',
                'harga_komponen' => 429000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 169,
                'nama_komponen' => 'Cooler Master HYPER 620S Black CPU Cooler',
                'brand_komponen' => 'Cooler Master',
                'id_kategori' => 8,
                'soket_komponen' => 'nan',
                'harga_komponen' => 575000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 170,
                'nama_komponen' => 'PCCOOLER RT620 Digital Dual Fan Tower Air Cooler Black',
                'brand_komponen' => 'PCCOOLER',
                'id_kategori' => 8,
                'soket_komponen' => 'nan',
                'harga_komponen' => 699000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 171,
                'nama_komponen' => 'PCCOOLER Air Cooler RZ620 White',
                'brand_komponen' => 'PCCOOLER',
                'id_kategori' => 8,
                'soket_komponen' => 'nan',
                'harga_komponen' => 899000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 172,
                'nama_komponen' => 'PCCOOLER Air Cooler RZ620 Black',
                'brand_komponen' => 'PCCOOLER',
                'id_kategori' => 8,
                'soket_komponen' => 'nan',
                'harga_komponen' => 899000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 173,
                'nama_komponen' => 'MCQUEST DDR4 16GB (8x2GB) 3200MHz',
                'brand_komponen' => 'MCQUEST',
                'id_kategori' => 4,
                'soket_komponen' => 'nan',
                'harga_komponen' => 378000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 174,
                'nama_komponen' => 'Midasforce RAM DDR4 8GB - 3200Mhz',
                'brand_komponen' => 'Midasforce',
                'id_kategori' => 4,
                'soket_komponen' => 'nan',
                'harga_komponen' => 190000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
            [
                'id_komponen' => 175,
                'nama_komponen' => 'Midasforce DDR4 16GB (8x2GB) 3200MHz',
                'brand_komponen' => 'Midasforce',
                'id_kategori' => 4,
                'soket_komponen' => 'nan',
                'harga_komponen' => 380000,
                'performa_komponen' => 0,
                'daya_komponen' => 0
            ],
        ]);
    }
}