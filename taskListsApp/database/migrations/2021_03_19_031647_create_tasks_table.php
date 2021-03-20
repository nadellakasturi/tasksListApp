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
            $table->id()->autoIncrement();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('status')->nullable();
            $table->string('task_priority')->nullable();
            $table->timestamp('completed_at');
            $table->foreignId('user_id')->constrained();
            $table->timestamps();//$table->timestamp('created_at); will use Current_timestamp otherwise it is making them as default "NULL"
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
