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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('parent_id', false, true)->nullable()->default(null);
            $table->integer('sequence')->nullable()->default(0);
            $table->string('badge')->nullable()->default(null);
            $table->string('badgeClass')->nullable()->default(null);
            $table->string('url')->nullable()->default(null);
            $table->string('name')->nullable()->default(null);
            $table->string('icon')->nullable()->default(null);
            $table->string('slug')->nullable()->default(null);
            $table->string('navheader')->nullable()->default(null);
            $table->boolean('newTab')->nullable()->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
