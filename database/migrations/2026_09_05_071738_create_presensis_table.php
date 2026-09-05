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
        Schema::create('presensis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->date('tanggal_masuk');
            $table->date('tanggal_pulang')->nullable();
            $table->time('jam_masuk');
            $table->time('jam_pulang')->nullable();
            $table->enum('shift', ['pagi', 'siang']);
            $table->integer('keterlambatan')->default(0)
            ->comment('menit');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presensis');
    }
};
