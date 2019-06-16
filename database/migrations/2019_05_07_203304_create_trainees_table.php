<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraineesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone',16);
            $table->string('slug');
            $table->char('age', 3);
            $table->char('gender', 1);
            $table->string('marital_status');
            $table->string('file');
            $table->string('image');
            $table->text('description');
            $table->string('image_men');
            $table->text('content');
            $table->string('name_wife');
            $table->string('image_woman');
            $table->text('content_woman');
            $table->string('external_url');
            $table->char('redirect', 3);
            $table->boolean('status')->default(1);
            $table->integer('order');
            $table->boolean('enabled')->default(1);

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('association_id');
            $table->foreign('association_id')->references('id')->on('associations');
            
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
        Schema::dropIfExists('trainees');
    }
}
