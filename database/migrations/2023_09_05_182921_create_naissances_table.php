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
        Schema::create('naissances', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('tuteur');
            $table->string('tutrice');
            $table->string('sexe');
            $table->string('profession');
            $table->date('dateNaissance');
            $table->date('dateDemenagement');
            $table->string('provenance');
            $table->string('destination');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('naissances');
    }
};
