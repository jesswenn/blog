<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCoverImageToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // When we submit our form
        // We need to save the name for the image to DB to acsses and display it
        // and actualu upload the file so at it knows were to look for it
        Schema::table('posts', function($table){
            $table->string('cover_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
           Schema::table('posts', function($table){
            $table->dropColumn('cover_image');
        });
    }
}
