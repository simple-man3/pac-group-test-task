<?php

namespace App\Models\Ship\Models;

use App\Models\CabinCategory\Models\CabinCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function cabinCategories(): HasMany
    {
        return $this->hasMany(CabinCategory::class);
    }
}
