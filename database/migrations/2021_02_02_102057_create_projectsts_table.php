<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectstsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projectsts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->nulllable();
            $table->string('appelation')->nulllable();
            $table->string('suffix')->nulllable();
            $table->string('birthday')->nulllable();
            $table->string('age')->nulllable();
            
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projectsts');
    }
}
