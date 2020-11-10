<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
