<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetailMagang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailMagang', function (Blueprint $table) {
            $table->id();
            $table->string('title', 191);
            $table->string('slug', 191);
            $table->text('informasiPerusahaan');
            $table->text('persyaratanMagang');
            $table->text('detailMagang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
