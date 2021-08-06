<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idAuthor')->nullable();
            $table->foreign('idAuthor')->references('id')->on('authors')->onDelete('set null')->onUpdate('cascade');
            $table->string('titulo');
            $table->year('annoPublicacion');
            $table->text('ubicacionLibrero');
            $table->text('descripcion');
            $table->integer('numeroCopia')->unsigned();
            $table->timestamps();
            $table->boolean('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
