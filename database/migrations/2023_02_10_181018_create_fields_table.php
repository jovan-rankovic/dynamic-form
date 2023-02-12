<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('fields', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('value')->nullable();
            $table->unsignedBigInteger('field_type_id');
            $table->unsignedBigInteger('form_id');
            $table->timestamps();

            $table->foreign('field_type_id')
                ->references('id')
                ->on('field_types');

            $table->foreign('form_id')
                ->references('id')
                ->on('forms')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('fields');
    }
};
