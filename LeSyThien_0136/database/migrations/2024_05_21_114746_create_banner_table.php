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
    Schema::create('lst_banner', function (Blueprint $table) {
      $table->id(); //id
      $table->string('name', 1000);
      $table->string('link', 1000);
      $table->unsignedInteger('sort_order')->default(1);
      $table->string('position', 50);
      $table->string('description', 1000);
      $table->string('image', 1000)->nullable();

      $table->unsignedInteger('created_by')->default(1);
      $table->unsignedInteger('updated_by')->nullable();
      $table->timestamps();
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
    Schema::dropIfExists('lst_banner');
  }
};
