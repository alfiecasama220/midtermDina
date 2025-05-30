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
        Schema::create('balance_sheet', function (Blueprint $table) {
            $table->id();
            $table->float('debit')->nullable();
            $table->float('credit')->nullable();
            $table->unsignedBigInteger('account_id');
            $table->timestamps();

            $table->foreign('account_id')->references('id')->on('account')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('balance_sheet');
    }
};
