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
        Schema::create('fund', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('fund_category_id');
            $table->unsignedBigInteger('fund_sub_category_id');
            $table->string('isin', 12);
            $table->string('wkn', 6);

            $table->foreign('fund_category_id','fund_cat_fk')->references('id')->on('fund_categories')
            ->onUpdate('cascade')->onDelete('no action');
            $table->foreign('fund_sub_category_id','fund_sub_cat_fk')->references('id')->on('fund_sub_categories')
            ->onUpdate('cascade')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fund');
    }
};
