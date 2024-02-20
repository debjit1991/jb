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
        Schema::create('offices', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('resource_type')->constrained();
            $table->foreignUlid('state_id')->constrained();
            $table->foreignUlid('district_id')->constrained();
            $table->foreignUlid('block_id')->constrained();
            $table->foreignUlid('block_id')->constrained();

            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offices');
    }
};
