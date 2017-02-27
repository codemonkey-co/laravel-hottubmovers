<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRenterInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renter_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rented_by');
            $table->string('email_address');
            $table->string('phone_number_show');
            $table->string('phone_number');
            $table->string('provider');
            $table->string('truck_fee');
            $table->string('per_hour');
            $table->string('min_men');
            $table->string('min_hours');
            $table->string('send_email')->nullable();
            $table->string('send_sms')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('renter_info');
    }
}
