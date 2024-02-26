<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students
{
    private static $students =  [
        [
            "id" => 1,
            "nis" => 1234567,
            "nama" => "Ayla",
            "kelas" => "11 PPLG 1",
            "tgl_lahir" => "23 Januari 2007",
            "alamat" => "Besito",
        ],
        [
            "id" => 2,
            "nis" => 891011,
            "nama" => "Vania",
            "kelas" => "11 PPLG 1",
            "tgl_lahir" => "5 November 2007",
            "alamat" => "Besito",
        ],
        [
            "id" => 3,
            "nis" => 6871923,
            "nama" => "Yaya",
            "kelas" => "11 PPLG 1",
            "tgl_lahir" => "12 Maret 2007",
            "alamat" => "Besito",
        ],
        [
            "id" => 4,
            "nis" => 5648623,
            "nama" => "Manda",
            "kelas" => "11 PPLG 1",
            "tgl_lahir" => "9 Juli 2007",
            "alamat" => "Besito",
        ],
        [
            "id" => 5,
            "nis" => 9856384,
            "nama" => "Mahes",
            "kelas" => "11 PPLG 1",
            "tgl_lahir" => "22 Mei 2006",
            "alamat" => "Besito",
        ]
    ];

    public static function all()
    {
        return self::$students;
    }
}
