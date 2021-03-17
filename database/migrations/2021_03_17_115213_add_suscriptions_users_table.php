<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSuscriptionsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->bigInteger('suscription_id')->nullable();
            $table->dateTime('trail_ends_at')->nullable();
            $table->dateTime('ends_at')->nullable();
            $table->dateTime('started_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->bigInteger('suscription_id')->nullable();
            $table->dateTime('trail_ends_at')->nullable();
            $table->dateTime('ends_at')->nullable();
            $table->dateTime('started_at')->nullable();
        });
    }
}
