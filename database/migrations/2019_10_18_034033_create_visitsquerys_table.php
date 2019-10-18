<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitsquerysTable extends Migration
{
    public function up()
    {
        Schema::table('visitsquerys', function (Blueprint $table) {
            $table->increments('id');
            $table->text('page');
            $table->integer('visits');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('visitsquerys');
    }
}
