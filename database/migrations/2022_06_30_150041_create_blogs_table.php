<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {  
        // php artisan make:model -m (membuat nama table sesuai dengan nama models nya)
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->string('image');
            
            // ini cara menambahkan foreignkey kedalam database
            $table->foreignId('users_id')->unsigned()->index()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('categories_id')->unsigned()->index()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
