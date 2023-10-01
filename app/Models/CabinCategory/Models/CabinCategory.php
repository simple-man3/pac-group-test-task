<?php

namespace App\Models\CabinCategory\Models;

use App\Http\Enums\TypesShipEnum;
use App\Models\Ship\Models\Ship;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
    public const FILLABLE = [
        'ship_id',
        'vendor_code',
        'title',
        'type',
        'description',
        'photos',
        'ordering',
        'state',
    ];

    protected $fillable = self::FILLABLE;

    protected $casts = [
        'photos' => 'array',
        'state' => 'int'
    ];

    protected $attributes = array(
        'photos' => []
    );

    public function ship(): BelongsTo
    {
        return $this->belongsTo(Ship::class);
    }
}
