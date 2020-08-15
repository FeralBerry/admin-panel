<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributeProductsTable extends Migration
{
    public function up()
    {
        Schema::create('attribute_products', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigInteger('attr_id');
            $table->bigInteger('product_id');
            $table->primary(['attr_id', 'product_id']);
        });
    }
    public function down()
    {
        Schema::dropIfExists('attribute_products');
    }
}
