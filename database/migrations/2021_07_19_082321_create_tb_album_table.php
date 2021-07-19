<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAlbumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_album', function (Blueprint $table) {
            $table->increments('album_id');
            $table->string('album_nama', 255);
            $table->text('album_ket');
            $table->integer('photo_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('tb_album', function (Blueprint $table) {
        
            $table->foreign('photo_id')->references('photo_id')->on('tb_photo')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_album');
    }
}
