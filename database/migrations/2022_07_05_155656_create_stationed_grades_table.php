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
        Schema::create('stationed_grades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('grading_id')
                ->constrained();
            $table->string('name');
            $table->string('description');
            $table->foreignId('stationed_student_id')
                ->constrained();
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
        Schema::dropIfExists('stationed_grades');
    }
};
