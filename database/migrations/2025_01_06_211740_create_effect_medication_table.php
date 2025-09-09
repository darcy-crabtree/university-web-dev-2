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
    Schema::create('effect_medication', function (Blueprint $table) {
        $table->unsignedBigInteger('effect_id');
        $table->unsignedBigInteger('medication_id');
        $table->primary(['effect_id','medication_id']);
        $table->foreign('medication_id')->references('id')->on('medications');
        $table->foreign('effect_id')->references('id')->on('effects');
        $table->timestamps();
        });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
{
    Schema::dropIfExists('effect_medication');
}
};
