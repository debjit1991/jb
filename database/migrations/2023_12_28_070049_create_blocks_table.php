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
        Schema::create('blocks', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('ref_code', 50)->index()->nullable();
            $table->string('lg_code')->unique();
            $table->string('name');
            $table->string('local_name')->nullable();
            $table->foreignUlid('district_id')->constrained();
            $table->timestamps();

            $table->index(['name', 'district_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blocks');
    }
};
