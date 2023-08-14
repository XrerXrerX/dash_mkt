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
        Schema::create('bo_link', function (Blueprint $table) {
            $table->id();
            $table->string('nama_team');
            $table->string('img_profile');
            $table->string('banner_tim');
            $table->string('login');
            $table->string('daftar');
            $table->string('wa');
            $table->string('fb');
            $table->string('ig');
            $table->text('artikel');
            $table->text('meta_tag');
            $table->string('rtp');
            $table->string('link_rtp');
            $table->string('livechat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bo_link');
    }
};
