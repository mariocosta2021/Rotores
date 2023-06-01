<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;

use App\Models\Client;
use App\Models\Payment;
use App\Models\Scheldule;

class Helper
{
    //lore,m
    public static function scheldule($fk_Scheldules_id)
    {
        $scheldule= Scheldule::find($fk_Scheldules_id);
        return $scheldule;
    }
    public static function payment($fk_Payments_id)
    {
        $payment= Payment::find($fk_Payments_id);
        return $payment;
    }

    public static function client($fk_Clients_id)
    {
        $payment= Client::find($fk_Clients_id);
        return $payment;
    }
}
