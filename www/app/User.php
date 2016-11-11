<?php

namespace App;

use App\Models\Policy;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @var index of student
     */
    const STUDENT = 1;

    /**
     * @var index of faculty manager
     */
    const FACULTY_MANAGER = 2;

    /**
     * Returns user relation policy.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function policy() {
        return $this->belongsTo(Policy::class);
    }

    /**
     * Check if a user is Student
     *
     * @return bool
     */
    public function isStudent() {
        return $this->policy->id == self::STUDENT;
    }

    /**
     * Check if a user is Faculty Manager
     *
     * @return bool
     */
    public function isFacultyManager() {
        return $this->policy->id == self::FACULTY_MANAGER;
    }

    /**
     * Check user role
     *
     * @param string $role
     * @return bool
     */
    public function isRole($role = 'student') {
        switch($role) {
            case "student":
                return $this->isStudent();
            case "manager":
                return $this->isFacultyManager();
            default:
                return false;
        }
    }
}
