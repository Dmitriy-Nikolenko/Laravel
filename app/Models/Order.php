<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * @package App\Models
 * @property string $user
 * @property string $phone
 * @property string $email
 * @property string $info
 */
class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'user',
        'phone',
        'email',
        'info',
    ];
}
