<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id(); // Primary key with unsignedBigInteger type
            $table->string('town_name', 100);
            $table->string('region', 100)->nullable(); // Region or state
            $table->string('country', 100);
            $table->decimal('latitude', 10, 8)->nullable(); // Geolocation latitude
            $table->decimal('longitude', 11, 8)->nullable(); // Geolocation longitude
            $table->enum('status', ['active', 'inactive'])->default('active'); // Record status
            $table->timestamps(); // created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
