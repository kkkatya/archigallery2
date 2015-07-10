<?php namespace Kkkatya\Gallery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreatePicturesTable extends Migration
{

    public function up()
    {
        Schema::create('kkkatya_gallery_pictures', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kkkatya_gallery_pictures');
    }

}
