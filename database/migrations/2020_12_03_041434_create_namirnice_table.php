<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrateNamirniceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('namirnice', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable;
            $table->text('content');
            $table->string('image')->nullable;
            $table->bigInteger('user_id')->unsigned;
            $table->foreign('user_id')->references('id')->on('user');
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
        Schema::dropIfExists('namirnice'); 
    }
}
