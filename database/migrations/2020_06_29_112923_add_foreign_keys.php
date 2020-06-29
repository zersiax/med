<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function(Blueprint $table){
            $table->foreign('organization_id')->references('id')
                ->on('organizations')->onDelete('cascade');
            $table->foreign('date_id')->references('id')
            ->on('dates')->onDelete('cascade');
        });

        Schema::table('dates', function (Blueprint $table) {
            $table->foreign('location_id')->references('id')
                ->on('locations')->onDelete('cascade');
            $table->foreign('course_id')->references('id')
                ->on('courses')->onDelete('cascade');
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
    }
}
