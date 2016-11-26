<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Type.
 *
 * @property int $id
 * @property string $name
 *
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Kind whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Kind whereName($value)
 * @mixin \Eloquent
 */
class Kind extends Model
{
    protected $table = 'kinds';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];
}
