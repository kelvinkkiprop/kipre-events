<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Model;
// Add
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Main\Event;
use App\Models\Main\EventTicket;
use App\Models\Other\PaymentMethod;

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
    ];

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
     * eventTicket
     */
    public function eventTicket(){
        return $this->hasOne(EventTicket::class, 'id', 'event_ticket_id');
    }
}
