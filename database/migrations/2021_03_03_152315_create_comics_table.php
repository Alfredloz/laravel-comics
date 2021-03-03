<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->char('art_by');
            $table->char('written_by');
            $table->string('series');
            $table->float('price');
            $table->date('release_date');
            $table->integer('volume');
            $table->string('trim_size')->nullable();
            $table->integer('page_content')->nullable();
            $table->string('rating')->nullable();
            $table->string('slug')->unique();
            $table->string('cover')->nullable();
            $table->boolean('available')->default(1)->change();
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
        Schema::dropIfExists('comics');
    }
}
