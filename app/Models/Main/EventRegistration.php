<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Model;
// Add
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Main\Event;
use App\Models\Main\EventPackage;
use App\Models\Other\PaymentMethod;
use App\Models\Others\ModeOfAttandance;

class EventRegistration extends Model
{
    /**
     * UUIDs
     */
    public $incrementing = false;
    protected $keyType = 'string';

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'id',
        'user_id',
        'event_id',
        'invoice_number',
        'event_ticket_id',
        'status_id',
        'require_formal_invitation',
        'address_invitation_to',
        'payment_method_id',
        'package_id',

        'student_id',
        'other_position',
        'mode_of_attendance_id',
        'will_present',
        'session_to_present_id',
        'abstract',
    ];


    /**
     * appends
     */
    protected $appends = [
        'abstract_url',
        'student_id_url',
    ];

    /**
    * GETTERS_AND_SETTERS
    */
    public function getAbstractUrlAttribute()
    {
        $value = $this->abstract;
        if(is_null($value)){
            return null;
        }else{
            $path = config('app.asset_url').config('app.paths.file_download');
            return $path.$value;
        }
    }
    public function getStudentIdUrlAttribute()
    {
        $value = $this->student_id;
        if(is_null($value)){
            return null;
        }else{
            $path = config('app.asset_url').config('app.paths.file_download');
            return $path.$value;
        }
    }

    /**
     * user
     */
    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    /**
     * paymentMethod
     */
    public function paymentMethod(){
        return $this->hasOne(PaymentMethod::class, 'id', 'payment_method_id');
    }

    /**
     * event
     */
    public function event(){
        return $this->hasOne(Event::class, 'id', 'event_id');
    }

    /**
     * package
     */
    public function package(){
        return $this->hasOne(EventPackage::class, 'id', 'package_id');
    }

    /**
     * attandanceMode
     */
    public function attandanceMode(){
        return $this->hasOne(ModeOfAttandance::class, 'id', 'package_id');
    }
}
