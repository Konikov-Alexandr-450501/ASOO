<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description', 'body', 'status', 'type_id', 'user_id'
    ];

    /**
     * Returns the owner of the Order.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function owner(){
        return $this->hasOne(User::class);
    }

    /**
     * Returns the type of Order.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function type(){
        return $this->hasOne(Type::class);
    }
}
