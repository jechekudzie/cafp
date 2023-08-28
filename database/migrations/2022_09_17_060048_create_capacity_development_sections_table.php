
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapacityDevelopmentSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capacity_development_sections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('capacity_development_id');
            $table->string('title')->nullable();
            $table->integer('section_number')->nullable();
            $table->longText('section')->nullable();
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
        Schema::dropIfExists('capacity_development_sections');
    }
}
