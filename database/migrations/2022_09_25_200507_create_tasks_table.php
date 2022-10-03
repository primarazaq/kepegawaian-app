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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id'); //utk ambil id pembuat task
            // $table->foreignId('user_nip'); //utk ambil nip penerima task
            $table->string('t_title');
            $table->text('t_body');
            $table->string('t_status');
            $table->string('t_priority');
            // $table->string('t_assigne1');
            // $table->string('t_assigne2');
            // $table->string('t_assigne3');
            // $table->string('t_created_by');
            $table->date('t_due_date');
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
        Schema::dropIfExists('tasks');
    }
};
