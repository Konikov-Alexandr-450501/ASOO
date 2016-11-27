<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Order.
 *
 * @property int $id
 * @property string $description
 * @property string $body
 * @property bool $status
 * @property int $user_id
 * @property int $type_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Models\User $owner
 * @property-read \App\Models\Type $type
 *
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Order whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Order whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Order whereBody($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Order whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Order whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Order whereTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Order whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Order extends Model
{
    protected $table = 'orders';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description', 'body', 'status', 'type_id', 'kind_id', 'user_id',
    ];

    /**
     * Returns the owner of the Order.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function owner()
    {
        return $this->hasOne(User::class);
    }

    /**
     * Returns the type of Order.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function type()
    {
        return $this->hasOne(Type::class);
    }

    /**
     * Returns the kind of Order.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function kind()
    {
        return $this->hasOne(Kind::class);
    }
}
