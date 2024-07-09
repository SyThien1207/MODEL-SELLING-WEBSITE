<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
 {
 Schema::create('lst_contact', function (Blueprint $table) {
 	$table->id(); //id
$table->unsignedInteger('user_id')->nullable();
$table->string('name',255);
$table->string('email',255);
$table->string('phone',255);
$table->string('title',255);
$table->mediumText('content');
$table->unsignedInteger('reply_id')->nullable();
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
        Schema::dropIfExists('lst_contact');
    }
};
