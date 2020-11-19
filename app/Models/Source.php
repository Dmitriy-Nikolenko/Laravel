<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Source
 * @package App\Models
 * @property string @name
 * @property string @link_rss
 */
class Source extends Model
{
    use HasFactory;

    protected $table = 'source';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'link_rss'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function news(): HasMany // 1 источник много новостей метод hasMany
    {
        return $this->hasMany(News::class, 'source_id', 'id');
    }
    public function category(): HasMany // 1 источник много категорий метод hasMany
    {
        return $this->hasMany(Category::class, 'source_id', 'id');
    }
}
