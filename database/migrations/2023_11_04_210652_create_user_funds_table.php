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
        Schema::create('user_funds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('fund_id');

            $table->unique(['user_id', 'fund_id']);

            $table->foreign('user_id', 'user_funds_user_fk')->references('id')->on('users');
            $table->foreign('fund_id', 'user_funds_fund_fk')->references('id')->on('fund');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_funds');
    }
};
