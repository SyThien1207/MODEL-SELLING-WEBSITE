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
 Schema::create('lst_topic', function (Blueprint $table) {
$table->id(); //id
$table->string('name', 1000);
$table->string('slug', 1000);
$table->string('description',255);
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
        Schema::dropIfExists('lst_topic');
    }
};
