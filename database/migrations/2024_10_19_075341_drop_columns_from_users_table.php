<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('users', function (Blueprint $table) {
        // Hapus kolom roles jika ada
        if (Schema::hasColumn('users', 'roles')) {
            $table->dropColumn('roles');
        }
        
        // Hapus kolom phone jika ada
        if (Schema::hasColumn('users', 'phone')) {
            $table->dropColumn('phone');
        }
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        // Kembalikan kolom roles
        $table->string('roles')->nullable();
        
        // Kembalikan kolom phone
        $table->string('phone')->nullable();
    });
}


};
