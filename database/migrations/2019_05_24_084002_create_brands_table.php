<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('title',255);
            $table->string('alias',255)->unique();
            $table->string('img',255)->default('brand_no_image.jpg');
            $table->string('description',255);
        });
    }
    public function down()
    {
        Schema::dropIfExists('brands');
    }
}
