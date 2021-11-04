<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitor_forms', function (Blueprint $table) {
            $table->id('id')->unique();
            $table->string('visitor_name', 50)->nullable();
            $table->string('visitor_email', 50)->nullable();
            $table->string('visitor_information', 255)->nullable();
            $table->string('visitor_mobile_number', 12)->nullable();
            $table->string('reason_for_visit',50)->nullable();
            $table->string('person_visiting', 50)->nullable();
            $table->double('body_temperature')->nullable();
            $table->integer('visitor_access_card')->nullable();
            $table->datetime('date_in_visitor')->nullable();
            $table->datetime('time_out')->nullable();
            $table->string('description', 255)->nullable();
            $table->string('photo')->nullable();
            $table->string('enabled')->nullable();
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
        Schema::dropIfExists('visitor_forms');
    }
}
