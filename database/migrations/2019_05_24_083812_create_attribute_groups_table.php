<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributeGroupsTable extends Migration
{
    public function up()
    {
        Schema::create('attribute_groups', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('title', 255);

        });
    }
    public function down()
    {
        Schema::dropIfExists('attribute_groups');
    }
}
