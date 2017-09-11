<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('artist_id');
            $table->string('title_pt')->nullable();
            $table->string('title_en')->nullable();
            $table->text('caption_small_pt')->nullable();
            $table->text('caption_small_en')->nullable();
            $table->text('caption_large_pt')->nullable();
            $table->text('caption_large_en')->nullable();
            $table->string('type_pt')->nullable();
            $table->string('type_en')->nullable();
            $table->string('year')->nullable();
            $table->string('plataforma')->nullable();
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
        Schema::dropIfExists('works');
    }
}
