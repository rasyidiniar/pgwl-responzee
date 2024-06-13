<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
//Pengaturan migrasi laravel untuk mengubah struktur tabel dalam database
    public function up(): void
    {
        Schema::table('table_points', function (Blueprint $table) {
            $table->string('image')->nullable();
        });
        Schema::table('table_polylines', function (Blueprint $table) {
            $table->string('image')->nullable();
        });
        Schema::table('table_polygons', function (Blueprint $table) {
            $table->string('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
//Fungsi laravel membalikkan migrasi yang dilakukan dengan fungsi down
    public function down(): void
    {
        Schema::table('table_points', function (Blueprint $table) {
            $table->dropColumn('image');
        });
        Schema::table('table_polylines', function (Blueprint $table) {
            $table->dropColumn('image');
        });
        Schema::table('table_polygons', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
};
