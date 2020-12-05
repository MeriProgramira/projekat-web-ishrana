<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVrstaAndContent1ToNamirniceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('namirnice', function (Blueprint $table) {
            $table->string('type');
            $table->text('content1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('namirnice', function (Blueprint $table) {
            $table->dropColumn('type');
            $table->dropColumn('content1');
        });
    }
}
