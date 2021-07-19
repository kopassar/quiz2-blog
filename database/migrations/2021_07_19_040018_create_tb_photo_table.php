<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPhotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_photo', function (Blueprint $table) {
            $table->increments('photo_id');
            $table->date('photo_tanggal');
            $table->string('photo_title', 255);
            $table->text('photo_ket');
            $table->integer('post_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('tb_photo', function (Blueprint $table) {
        
            $table->foreign('post_id')->references('post_id')->on('tb_post')
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
        Schema::dropIfExists('tb_photo');
    }
}
