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
        Schema::create('lst_orderdetail', function (Blueprint $table) {
            $table->id(); //id
            $table->unsignedInteger('order_id');
            $table->unsignedInteger('product_id');
            $table->double('price');
            $table->unsignedInteger('qty');
            $table->double('amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lst_orderdetail');
    }
};
