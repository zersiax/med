<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("title");
            $table->text("Description");
            $table->decimal("price");
            $table->enum('category', ['e-learning', 'webinar', 'fysiek', 'congres']);
            $table->bigInteger("organization_id");
            $table->bigInteger("date_id");

            $table->index('organization_id');

            $table->index('date_id');
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
        Schema::dropIfExists('courses');
    }
}
