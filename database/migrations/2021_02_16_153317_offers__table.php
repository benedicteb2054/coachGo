<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('offer_category_id')->unsigned();
            $table->foreign('offer_category_id')
                ->references('id')
                ->on('offer_categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->bigInteger('service_id')->unsigned();
            $table->foreign('service_id')
                ->references('id')
                ->on('services')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('title');
            $table->string('icon');
            $table->string('duration')->nullable();
            $table->string('description');
            $table->string('sub_title')->nullable();
            $table->integer('price');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
