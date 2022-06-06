<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCongesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // Congé (Id, user_id, date_début, date_retour, motif, acceptation)
    public function up()
    {
        Schema::create('conges', function (Blueprint $table) {
            $table->id();
            $table->biginteger('user_id')->unsigned()->index();
            $table->date('date_debut');
            $table->date('date_retour');
            $table->text('cause');
            $table->string('acceptation')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

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

        Schema::dropIfExists('conges');
    }
}
