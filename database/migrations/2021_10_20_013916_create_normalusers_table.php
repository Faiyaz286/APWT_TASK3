<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNormalusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('normalusers', function (Blueprint $table) {
            $table->id();
            $table->string('u_name', 30);
            $table->string('u_username', 30)->unique();
            $table->string('u_email', 30);
            $table->string('u_password', 50);
            $table->date('u_dob');
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
        Schema::dropIfExists('normalusers');
    }
}
