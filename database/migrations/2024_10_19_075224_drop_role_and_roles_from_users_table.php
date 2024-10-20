<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('role');   // Menghapus kolom role
        $table->dropColumn('roles');  // Menghapus kolom roles jika ada
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('role')->default('USER'); // Kembalikan kolom role
        $table->string('roles')->nullable(); // Kembalikan kolom roles jika ingin
    });
}

};
