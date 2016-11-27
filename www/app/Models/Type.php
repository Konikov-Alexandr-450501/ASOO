<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'types';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'kind_id',
    ];

    /**
     * Returns the kind of a Type.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function kind()
    {
        return $this->belongsTo(Kind::class);
    }

    /**
     * Checks if the current Type is belong to kind of reference.
     *
     * @return bool
     */
    public function isForReference()
    {
        return $this->kind_id == 2;
    }

    /**
     * Checks if the current Type is belong to kind of sheet.
     *
     * @return bool
     */
    public function isForSheet()
    {
        return $this->kind_id == 1;
    }
}
