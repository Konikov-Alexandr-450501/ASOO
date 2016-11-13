<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Faculty
 *
 * @mixin \Eloquent
 * @property integer $id
 * @property string $name
 * @property string $description
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Faculty whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Faculty whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Faculty whereDescription($value)
 */
class Faculty extends Model
{
    protected $table = 'faculties';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description'
    ];
}
