<?php

namespace App\Models\CabinCategory\Models;

use App\Http\Enums\TypesShipEnum;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id - ID категории кабины
 * @property int $ship_id - ID корабля
 * @property string $vendor_code - Сокращённый код категории
 * @property string $title - Заголовок
 * @property TypesShipEnum $type  - Тип
 * @property string $description - Описание
 * @property array $photos - Массив картинок
 * @property int $ordering - Заказ
 * @property bool $state - Cостояние
 */
class CabinCategory extends Model
{
    protected $casts = [
        'photos' => 'array',
        'state' => 'int'
    ];
}
