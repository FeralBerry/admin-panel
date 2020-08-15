<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelatedProductsTable extends Migration
{
    public function up()
    {
        Schema::create('related_products', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigInteger('product_id')->unsigned();
            $table->bigInteger('related_id')->unsigned();
            $table->primary(['product_id','related_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('related_products');
    }
}
