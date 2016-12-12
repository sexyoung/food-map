<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_albums', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type', 50);
            $table->string('page_id', 100);
            $table->string('page_name', 100);
            $table->string('page_user', 100);
            $table->string('page_email', 100);
            $table->string('album_id', 100)->unique();
            $table->string('location', 100);
            $table->float('latitude');
            $table->float('longitude');
            $table->boolean('confirmed')->default(false);
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
        Schema::drop('page_albums');
    }
}
