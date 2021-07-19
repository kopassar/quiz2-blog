<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_post', function (Blueprint $table) {
            $table->increments('post_id');
            $table->date('post_tanggal');
            $table->string('post_slug', 100);
            $table->string('post_title', 255);
            $table->text('post_ket');
            $table->integer('cat_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('tb_post', function (Blueprint $table) {
        
            $table->foreign('cat_id')->references('cat_id')->on('tb_kategori')
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
        Schema::dropIfExists('tb_post');
    }
}
