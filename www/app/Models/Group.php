<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Group.
 *
 * @mixin \Eloquent
 *
 * @property int $id
 * @property string $number
 * @property int $faculty_id
 *
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Group whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Group whereNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Group whereFacultyId($value)
 */
class Group extends Model
{
    protected $table = 'groups';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'number', 'faculty_id',
    ];
}
