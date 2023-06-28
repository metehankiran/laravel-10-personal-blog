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
        Schema::table('tag_clouds', function (Blueprint $table) {
            $table->boolean('is_featured')->default(false)->after('slug');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tag_clouds', function (Blueprint $table) {
            $table->dropColumn('is_featured');
        });
    }
};
