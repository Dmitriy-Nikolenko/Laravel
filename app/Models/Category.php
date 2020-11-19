<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Category
 * @package App\Models
 * @property string $name
 * @property string $description
 * @property string $photo
 * @property int $source_id
 */
class Category extends Model
{
    use HasFactory;

    protected $table = 'category';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'description',
        'photo',
        'source_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function news(): HasMany // 1 категория много новостей метод hasMany
    {
        return $this->hasMany(News::class, 'category_id', 'id');
    }

    public function source()
    {
        return $this->belongsTo(Source::class, 'source_id', 'id');
    }
}
