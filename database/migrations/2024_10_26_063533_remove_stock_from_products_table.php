<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveStockFromProductsTable extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('stock'); // Menghapus kolom stock
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->integer('stock')->default(0); // Menambahkan kembali kolom stock jika rollback
        });
    }
}
