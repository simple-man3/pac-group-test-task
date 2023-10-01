<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id - ID корабля
 * @property string $title - Заголовок
 * @property array $spec - Свойства
 * @property string $description - Описание
 * @property int $ordering - Заказ
 * @property bool $state - Состояние
 */
class Ship extends Model
{
    public const FILLABLE = [
        'title',
        'spec',
        'description',
        'ordering',
        'state',
    ];

    protected $fillable = self::FILLABLE;

    protected $casts = [
        'spec' => 'array',
        'state' => 'int'
    ];
}
