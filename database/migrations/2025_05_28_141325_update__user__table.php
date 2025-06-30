<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Add new fields
            $table->date('tanggal_lahir')->nullable()->after('email');
            $table->string('alamat')->nullable()->after('tanggal_lahir');
            $table->string('pas_foto')->nullable()->after('alamat'); // Store file path
            $table->string('kartu_keluarga')->nullable()->after('pas_foto'); // Store file path
            
            // Add approval system
            $table->boolean('is_approved')->default(false)->after('role');
            $table->timestamp('approved_at')->nullable()->after('is_approved');
            $table->unsignedBigInteger('approved_by')->nullable()->after('approved_at');
            
            // Add foreign key for approved_by
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['approved_by']);
            $table->dropColumn([
                'tanggal_lahir',
                'alamat', 
                'pas_foto',
                'kartu_keluarga',
                'is_approved',
                'approved_at',
                'approved_by'
            ]);
        });
    }
};