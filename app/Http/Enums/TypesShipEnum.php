<?php

namespace App\Http\Enums;

enum TypesShipEnum: string
{
    case INSIDE = 'inside';
    case OCEAN = 'Ocean view';
    case BALCONY = 'Balcony';
    case SUITE = 'Suite';
}
