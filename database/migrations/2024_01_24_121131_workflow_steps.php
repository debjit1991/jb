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
           Schema::create('workflow_steps', function (Blueprint $table) {
            $table->foreignUlid('scheme_id')->constrained()->index();
            $table->unsignedTinyInteger('id', true);
           // $table->dropPrimary('step_id');
            $table->integer('parent_id');
            $table->string('step_name', 50);
            $table->foreignUlid('role_id')->constrained();
            $table->foreignUlid('permissions_id')->constrained();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workflow_steps');
    }
};
