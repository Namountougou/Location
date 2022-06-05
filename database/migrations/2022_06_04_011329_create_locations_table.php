<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->dateTime('dateFin');
            $table->dateTime('dateDebut');
            $table->foreignId('client_id')->constrained();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('status_location_id')->constrained('status_locations');
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('locations', function(Blueprint $table){
            $table->dropForeign("client_id");
            $table->dropForeign("user_id");
            $table->dropForeign("status_location_id");

        });
        Schema::dropIfExists('locations');
    }
};
