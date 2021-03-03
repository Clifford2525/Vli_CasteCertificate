<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTribalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tribals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('date')->nullable();
            $table->string('reg_no')->unique();
            $table->string('name')->nullable();
            $table->string('appellation')->nullable();
            $table->string('suffix')->nullable();
            $table->string('birthday')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('email')->nullable();
            $table->biginteger('phone')->nullable();
            $table->string('caste')->nullable();
            $table->string('district')->nullable();
            $table->string('clan')->nullable();
            $table->string('occupation')->nullable();
            $table->biginteger('income')->nullable();
            $table->string('education')->nullable();
            $table->string('relation_name')->nullable();
            $table->string('relation_type')->nullable();

            $table->string('door')->nullable();
            $table->string('locality1')->nullable();
            $table->string('locality2')->nullable();
            $table->string('location')->nullable();
            $table->string('sub_dist')->nullable();
            $table->string('dist')->nullable();
            $table->string('state')->nullable();
            $table->biginteger('pin')->nullable();
            $table->string('country')->nullable();
            $table->string('police')->nullable();
            $table->string('post')->nullable();

            $table->string('pdoor')->nullable();
            $table->string('plocality1')->nullable();
            $table->string('plocality2')->nullable();
            $table->string('plocation')->nullable();
            $table->string('psub_dist')->nullable();
            $table->string('pdist')->nullable();
            $table->string('pstate')->nullable();
            $table->biginteger('ppin')->nullable();
            $table->string('pcountry')->nullable();
            $table->string('ppolice')->nullable();
            $table->string('ppost')->nullable();

            $table->string('purpose')->nullable();
            $table->string('identity_proof')->nullable();
            $table->string('address_proof')->nullable();
            $table->string('passport_photo')->nullable();
            $table->string('check')->nullable();

            $table->string('forwarder_comments')->nullable();
            $table->string('due_date')->nullable();
            $table->string('target_date')->nullable();
            $table->string('forwarder_remarks')->nullable();

            $table->string('status')->nullable();

            }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tribals');
    }
}
