<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('catgory_id');
            $table->string('name_fa');
            $table->string('name_en');
            $table->string('color_id');
            $table->integer('internalMemory');
            $table->string('network');
            $table->integer('ram');
            $table->integer('front_camera');
            $table->string('back_camera');
            $table->string('replace_battry');
            $table->string('screanSize');
            $table->string('simNumber');
            $table->string('imageUrl');
            $table->integer('price');
            $table->integer('count')->unsigned();
            $table->integer('discount')->default(0)->nullable();
            $table->enum('status', ['0','1'])->default(0)->nullable();
            $table->integer('code');
            $table->enum('best', ['0','1'])->default(0)->nullable();
            $table->text('body');
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
