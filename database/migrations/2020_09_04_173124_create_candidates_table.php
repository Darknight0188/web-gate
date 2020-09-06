<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('email', 45)->unique();
            $table->string('username', 45)->unique();
            $table->string('password', 45);
            $table->string('status', 45);
            $table->timestamps();
            $table->string('updated_by', 45)->nullable();
            $table->string('created_by', 45);
            $table->dateTime('birthday');
            $table->string('address', 45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
}
