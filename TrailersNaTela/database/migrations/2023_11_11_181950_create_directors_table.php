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
        Schema::create('directors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('birth_date');
            $table->string('email');
            $table->string('phone');
            $table->string('cpf');
            $table->enum('gender', ['M', 'F', 'X']);
            $table->string('zipcode');
            $table->string('address');
            $table->string('number');
            $table->string('neighbourhood');
            $table->string('state');
            $table->string('city');
            $table->string('complement')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('directors');
    }
};
