<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Feedback
 * @package App\Models
 * @property string $user
 * @property string $feedback
 */
class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedback';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'user',
        'feedback',
    ];
}
