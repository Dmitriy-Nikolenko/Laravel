<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class News
 * @package App\Models
 *
 * @property string $title
 * @property string $preview
 * @property string $text
 * @property string $photo
 * @property int $category_id
 * @property int $source_id
 *
 */
class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'title',
        'preview',
        'text',
        'photo',
        'category_id',
        'source_id',
    ];

}
