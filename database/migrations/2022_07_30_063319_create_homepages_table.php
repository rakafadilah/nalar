<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('title1')->nullable();
            $table->string('subtitle1')->nullable();
            $table->string('title2')->nullable();
            $table->string('subtitle2')->nullable();
            $table->string('title3')->nullable();
            $table->string('subtitle3')->nullable();
            $table->string('image');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homepages');
    }
}
