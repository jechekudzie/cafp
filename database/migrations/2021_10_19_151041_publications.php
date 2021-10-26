<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Publications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('publications', function (Blueprint $table) {
        $table->unsignedBigInteger('publication_category_id');
            $table->string('title');
        $table->longText('sub_title')->nullable();
        $table->longText('description')->nullable();
        $table->longText('authors')->nullable();
        $table->string('file')->nullable();
        $table->string('period')->nullable();
        $table->string('status')->default(1);
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
        //
        Schema::dropIfExists('publications');
    }
}
