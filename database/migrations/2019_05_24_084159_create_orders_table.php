<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->enum('status',['0','1','2'])->default(0);
            $table->timestamps();
            $table->softDeletes();
            $table->string('currency',10);
            $table->text('note')->nullable();
            $table->float('sum')->nullable();
        });
    }
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
