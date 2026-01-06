<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bug extends Model
{
    public const ABERTO = 'aberto';

    public static function statusPadrao(): string
    {
        return self::ABERTO;
    }
}
