<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('email', 255);
            $table->string('cpf', 255);
            $table->string('zipcode', 8);
            $table->string('address', 255);
            $table->string('complement', 255);
            $table->string('district', 255);
            $table->string('state', 255);
            $table->string('SI', 255);
            $table->timestamps();
        });
    }

    public function insertDefaultPatients()
    {
        $patient = new Patients();

        $nome = 'testezin';
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
