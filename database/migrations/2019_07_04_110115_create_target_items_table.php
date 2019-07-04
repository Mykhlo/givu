<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTargetItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('target_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('target_category_id')->unsigned();
            $table->integer('target_subcategory_id')
                ->unsigned()
                ->default('0');
            $table->string('name');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('target_items');
    }
}
