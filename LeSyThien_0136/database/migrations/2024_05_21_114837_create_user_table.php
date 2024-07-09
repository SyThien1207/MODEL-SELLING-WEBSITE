<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('lst_user', function (Blueprint $table) {
            $table->id(); //id
            $table->string('name',255);
            $table->string('username',255);
            $table->string('password',255);
            $table->string('address',255);
            $table->string('gender',255);
            $table->string('phone',255);
            $table->string('email',255);
            $table->string('roles',50);
            $table->timestamps(); //created_at, updated_at
            $table->unsignedInteger('created_by')->default(1);
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedTinyInteger('status')->default(2);
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lst_user');
    }
};
