<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// Add
use Illuminate\Support\Str;
use App\Models\Settings\Role;
use App\Models\Others\UserStatus;
use App\Models\Others\Country;
use App\Models\Others\Title;
use App\Models\Others\Position;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * UUIDs
     */
    public $incrementing = false;
    protected $keyType = 'string';

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            // UUID
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'username',
        'email',
        'phone',
        'role_id',
        'status_id',
        'password',

        'title_id',
        'institution',
        'physical_address',
        'country_id',
        'position_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }



    /**
     * appends
     */
    protected $appends = [
        'name',
    ];


    /**
    * GETTERS_AND_SETTERS
    */
    public function getNameAttribute()
    {
        $value = $this->first_name;
        $value2 = $this->last_name;
        if(is_null($value) || is_null($value2)){
            return "";
        }
        return $value.' '.$value2;
    }



    /**
     * role
     */
    public function role(){
        return $this->hasOne(Role::class, 'id', 'role_id');
    }

    /**
     * status
     */
    public function status(){
        return $this->hasOne(UserStatus::class, 'id', 'status_id');
    }

    /**
     * country
     */
    public function country(){
        return $this->hasOne(Country::class, 'id', 'country_id');
    }

    /**
     * title
     */
    public function title(){
        return $this->hasOne(Title::class, 'id', 'title_id');
    }

    /**
     * position
     */
    public function position(){
        return $this->hasOne(Position::class, 'id', 'position_id');
    }

}
