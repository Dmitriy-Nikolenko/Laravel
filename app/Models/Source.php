<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Source
 * @package App\Models
 * @property string @name
 */
class Source extends Model
{
    use HasFactory;

    protected $table = 'source';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'name',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function news(): HasMany // 1 источник много новостей метод hasMany
    {
        return $this->hasMany(News::class, 'source_id', 'id');
    }
}
