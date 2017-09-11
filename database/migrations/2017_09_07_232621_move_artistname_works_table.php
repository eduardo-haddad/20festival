<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MoveArtistnameWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('works', function (Blueprint $table) {

            DB::statement("ALTER TABLE works MODIFY COLUMN artist_name varchar(191) AFTER id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('works', function (Blueprint $table) {
            
            DB::statement("ALTER TABLE works MODIFY COLUMN artist_name varchar(191) AFTER id");
        });
    }
}
