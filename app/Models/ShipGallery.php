<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id - ID галереи
 * @property int $ship_id - ID корабля
 * @property string $title - Заголовок
 * @property string $url - Ссылка на картинку
 * @property int $ordering - Заказ
 */
class ShipGallery extends Model
{
}
