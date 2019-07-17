<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->integer('gender_id')->unsigned();
            $table->integer('parental_status_id')
                ->nullable(true)
                ->unsigned();
            $table->integer('income_id')
                ->nullable(true)
                ->unsigned(); 
            $table->integer('education_id')
                ->nullable(true)
                ->unsigned();           
            $table->string('name');            
            $table->date('birthday');                       
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
