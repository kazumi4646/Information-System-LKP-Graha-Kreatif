<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProgramsTable extends Migration
{
    public function up()
    {
        Schema::create('user_programs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('program_id')->constrained()->onDelete('cascade');
            $table->timestamp('enrolled_at')->nullable();
            $table->timestamps();
            
            // To prevent duplicate enrollments
            $table->unique(['user_id', 'program_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_programs');
    }
}