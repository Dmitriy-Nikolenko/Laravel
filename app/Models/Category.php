<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * @package App\Models
 * @property string $name
 * @property string $description
 * @property string $photo
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
    ];
}
