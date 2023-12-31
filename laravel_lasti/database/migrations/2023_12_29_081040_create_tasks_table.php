<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->enum('priority', ['low', 'medium', 'high']);
            $table->date('due_date');
            $table->boolean('completed')->default(false);
            $table->timestamps(); // Timestamps umum
            $table->timestamp('completed_at')->nullable(); // Timestamp untuk waktu penyelesaian (bisa null jika belum selesai)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
