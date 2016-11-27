<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->enum('sex', ['M', 'F']);// M男，F女
            $table->enum('status', ['0', '1', '2'])->default(1);// 0 删除，1 正常，2 备用
            $table->text('per_sign');
            $table->string('channel', 20)->default('website');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
