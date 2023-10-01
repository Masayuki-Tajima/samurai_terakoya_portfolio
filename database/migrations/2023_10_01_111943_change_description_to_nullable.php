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
        Schema::table('tasks', function (Blueprint $table) {
            $table->text('description')->nullable(true)->change();
            $table->date('actual_start_date')->nullable(true)->change();
            $table->date('actual_end_date')->nullable(true)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->text('description')->nullable(false)->change();
            $table->date('actual_start_date')->nullable(false)->change();
            $table->date('actual_end_date')->nullable(false)->change();
        });
    }
};
