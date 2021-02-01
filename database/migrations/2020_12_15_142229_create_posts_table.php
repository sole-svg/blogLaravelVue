<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');                        //he agregado la funcion bigIncrements para seguir el ejemplo del curso
            $table->string('title', 500)->nullable();
            $table->string('url_clean', 500)->nullable();       //url limpia del titulo
            $table->longText('content')->nullable();            //columna de los contenidos del post
            $table->enum('posted', ['yes', 'not'])->default('not');   //condicional que evalúa si se ha publicado el post
            $table->bigInteger('category_id')->unsigned()->nullable();    //apunta las categorias de los posteos aun que no se deberia por que estamos usando el biginteger y mas adelante va a dar error

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
        Schema::dropIfExists('posts');
    }
}
