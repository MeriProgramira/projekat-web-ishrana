<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Namirnica;
class NamirnicaController extends Controller


{
    public function up()
    {
        Schema::create('namirnice', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('content');
            $table->string('image')->nullable();
            $table->bigInteger('user_id')->unsigned();
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
        Schema::dropIfExists('namirnica');
    }
}


