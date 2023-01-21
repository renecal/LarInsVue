<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('listings', function (Blueprint $table) {
            //
            $table->unsignedTinyInteger('beds'); /* camas */
            $table->unsignedTinyInteger('baths'); /* baños */
            $table->unsignedSmallInteger('area'); /* area */

            $table->tinyText('city'); /* ciudad */
            $table->tinyText('code');   /* code postal */
            $table->tinyText('street'); /* direccion */
            $table->tinyText('street_nr'); /* numero de direccion */

            $table->unsignedInteger('price');   /* precio */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropColumns('listings', [
            'beds', 'baths', 'area', 'city', 'code', 'street', 'street_nr', 'price'
        ]);
    }
};
