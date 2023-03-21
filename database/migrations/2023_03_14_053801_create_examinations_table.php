<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('examinations', function (Blueprint $table) {
            $table->id();
            $table->date('examination_date');
            $table->enum('gender', ['Laki-Laki', 'Perempuan']);
            $table->string('fullname');
            $table->string('age');
            $table->string('village');
            $table->string('subdistrict');
            $table->string('regency');
            $table->string('anamnese');
            $table->string('checkup_result');
            $table->string('therapy');
            $table->string('action');
            $table->string('visit_to');
            $table->string('queue_number');
            $table->string('examiner');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examinations');
    }
};
