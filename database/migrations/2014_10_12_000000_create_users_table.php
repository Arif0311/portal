<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id')->unique();
            $table->string('fullname', 50);
            $table->string('role', 20);
            $table->string('position', 50);
            $table->string('department', 10);
            $table->string('username', 10);
            $table->string('email', 50);
            $table->string('mobile_number', 12);
            $table->string('addres');
            $table->string('password', 100);
            $table->string('description')->nullable();
            $table->string('enabled')->nullable();
            $table->rememberToken();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
