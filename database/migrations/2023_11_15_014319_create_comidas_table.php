<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComidasTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
        public function up()
        {
            Schema::create('pacotes', function (Blueprint $table) {
                $table->id();
                $table->string('nome');
                $table->text('descricao');
                $table->decimal('preco', 8, 2);
                $table->timestamps();
            });
        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comidas');
    }
};
