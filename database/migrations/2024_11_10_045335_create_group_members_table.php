<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('group_id');
            $table->unsignedBigInteger('member_id');
            $table->string('role')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamp('joined_at')->nullable();
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');

            // Unique constraint to ensure a member can only join a group once
            $table->unique(['group_id', 'member_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_members');
    }
}
