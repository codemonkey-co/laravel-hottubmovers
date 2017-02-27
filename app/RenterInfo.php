<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class RenterInfo extends Model
{
	public $table = 'renter_info';

    protected $fillable = [
        'rented_by', 'phone_number_show', 'email_address', 'phone_number', 'provider', 'truck_fee', 'per_hour', 'min_men', 'min_hours', 'send_email', 'send_sms',
    ];
}
