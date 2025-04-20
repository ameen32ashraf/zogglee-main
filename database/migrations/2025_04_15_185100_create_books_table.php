<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
// database/migrations/xxxx_xx_xx_create_books_table.php
// database/migrations/xxxx_xx_xx_create_books_table.php
public function up()
{
    Schema::create('books', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('author');
        $table->decimal('price', 8, 2);
        $table->string('genre')->nullable(); // ✅ Ensure genre exists
        $table->string('image');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
