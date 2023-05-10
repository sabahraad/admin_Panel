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
        Schema::create('withdraw_money', function (Blueprint $table) {
            $table->id();
            $table->integer('withdrawAmount');
            $table->string('withdrawDateTime');
            $table->string('withdrawBy');
            $table->string('transectionStatus')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('withdraw_money');
    }
};
