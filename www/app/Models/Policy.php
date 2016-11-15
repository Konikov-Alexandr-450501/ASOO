<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Policy.
 *
 * @property int $id
 * @property string $name
 *
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Policy whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Policy whereName($value)
 * @mixin \Eloquent
 */
class Policy extends Model
{
    protected $table = 'policies';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];
}
