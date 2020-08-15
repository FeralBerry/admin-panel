<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminOrderWidgetsTable extends Migration
{
    public function up()
    {
        Schema::create('admin_order_widgets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('admin_order_widgets');
    }
}
