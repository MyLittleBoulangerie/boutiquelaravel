<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /*public static function prixTotalProduits($quantity, $price)
    {
        $totalPrice = $quantity * $price;
        return $totalPrice;
    }

    public static function prixTotalCommande()
    {
        $totalPriceProduct = self::prixTotalProduits();

        $orderTotalPrice = $totalPriceProduct + $totalPriceProduct /*...*/
        /*;

        return $orderTotalPrice;

    }*/
}
