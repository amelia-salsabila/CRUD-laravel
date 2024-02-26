<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Extracurricular
{
    private static $extra = [
        [
            "id" => 1,
            "nama" => "Theater",
            "pembina" => "Bu Fara",
            "deskripsi" => "Extra ini meruju kepada penampilan drama.",
        ],
        [
            "id" => 2,
            "nama" => "OSIS",
            "pembina" => "Bu Widy",
            "deskripsi" => "Extra ini meruju kepada penampilan drama.",
        ],
        [
            "id" => 3,
            "nama" => "Rohis",
            "pembina" => "Pak Sarwo Edi",
            "deskripsi" => "Extra ini meruju kepada penampilan drama.",
        ],
        [
            "id" => 4,
            "nama" => "Teather",
            "pembina" => "Bu Fara",
            "deskripsi" => "Extra ini meruju kepada penampilan drama.",
        ],
        [
            "id" => 5,
            "nama" => "Theater",
            "pembina" => "Bu Fara",
            "deskripsi" => "Extra ini meruju kepada penampilan drama.",
        ],

    ];

    public static function all()
    {
        return self::$extra;
    }
}
