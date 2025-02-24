<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('designs', function (Blueprint $table) {
            $table->string('status')->default('Pending'); // Bisa diubah ke nilai default lain
        });
    }

    public function down()
    {
        Schema::table('designs', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
