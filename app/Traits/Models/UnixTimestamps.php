<?php

namespace App\Traits\Models;

trait UnixTimestamps
{
    public function getDateFormat()
    {
        return 'U.u';
        return 'Uu';
        return 'U';
    }
}
