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
        Schema::create('b_m_i_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('section_student_id');
            $table->float('height')->default(0);
            $table->float('weight')->default(0);
            $table->string('status')->nullable();
            $table->float('bmi')->nullable();
            $table->string('height_for_age')->nullable();
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
        Schema::dropIfExists('b_m_i_s');
    }
};
