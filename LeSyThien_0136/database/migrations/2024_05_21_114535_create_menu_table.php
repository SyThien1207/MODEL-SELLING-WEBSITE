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
    Schema::create('lst_menu', function (Blueprint $table) {
      $table->id(); //id
      $table->string('name', 1000);
      $table->string('link', 1000);
      $table->string('type', 255);
      $table->unsignedInteger('table_id')->default(0);
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
    Schema::dropIfExists('lst_menu');
  }
};
