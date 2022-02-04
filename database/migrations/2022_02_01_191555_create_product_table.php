<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('category_id')->constrained('categories');
            $table->string('nombre');
            $table->string('descripcion');
            $table->boolean('sale');
            $table->foreignId('comprador_id')->constrained('users')->nullable();;
            $table->foreignId('user_id')->constrained('users');
            $table->float('precio', 10, 2);
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
        Schema::dropIfExists('products');
    }
}
