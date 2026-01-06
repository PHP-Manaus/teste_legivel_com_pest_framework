<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bug extends Model
{
    public static function statusPadrao(): string
    {
        return 'aberto';
    }
}
