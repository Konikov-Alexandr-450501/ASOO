<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Type.
 *
 * @property int $id
 * @property string $name
 *
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Type whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Type whereName($value)
 * @mixin \Eloquent
 */
class Type extends Model
{
    protected $table = 'types';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];
}
