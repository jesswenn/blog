<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function($table){
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            // If we want to delete the column user_id do a
            

            // Thats way we set the shema in the 
            // function down wen we made it so we can easily rollback in terminal 
            // width the comand:
        
            // php artisan migrate rollback 
            // (in terminal)

            // it will delete the column user_id, and not the hole table row
            // (se below)
           Schema::table('posts', function($table){
            $table->dropColumn('user_id');
        });
    }
}
