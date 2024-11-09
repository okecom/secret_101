<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReligionbaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('religionbase', function (Blueprint $table) {
           // $table->id('religionbase_id'); // Primary key
            $table->id(); // Primary key
            $table->string('name', 100);
            $table->text('description')->nullable();
            $table->string('origin_region', 50)->nullable();
            $table->string('founding_period', 50)->nullable();
            $table->string('founder_name', 100)->nullable();
            $table->text('sacred_texts')->nullable();
            $table->text('primary_celebrations')->nullable();
            $table->integer('followers_estimate')->nullable();
            $table->string('official_website', 255)->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
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
        Schema::dropIfExists('religionbase');
    }
}
