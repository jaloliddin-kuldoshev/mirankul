<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 190);
            $table->string('motto', 190);
            $table->string('des', 190);
            $table->string('icon', 190);
            $table->string('img', 190);
            $table->string('sym', 190);
            $table->text('text');
            $table->string('tit', 190);
            $table->string('pos', 190);
            $table->string('contact', 190);
            $table->string('mob', 190);
            $table->string('tel', 190);
            $table->string('ex', 190);
            $table->string('email', 190);
            $table->string('file', 190);
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
        Schema::dropIfExists('works');
    }
}
