<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->bigInteger('pack_id')->unsigned();
            $table->foreign('pack_id')
                    ->references('id')
                    ->on('packs')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->bigInteger('market_id')->unsigned();
            $table->foreign('market_id')
                    ->references('id')
                    ->on('markets')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->integer('earnings');
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
        Schema::dropIfExists('investments');
    }
}
