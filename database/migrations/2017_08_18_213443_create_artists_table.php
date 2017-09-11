<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {

            $table->integer('id')->primary();
            $table->string('slug');
            $table->string('name')->nullable();
            $table->text('bio_pt')->nullable();
            $table->text('bio_en')->nullable();
            $table->string('origin_pt')->nullable();
            $table->string('origin_en')->nullable();
            $table->string('birth')->nullable();
            $table->string('plataforma_all')->nullable();
            $table->text('synopsis_pt')->nullable();
            $table->text('synopsis_en')->nullable();
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
        Schema::dropIfExists('artists');
    }
}
