<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		//table banko
        
			$table->increments('id');//for primarey key and autoincremental
			$table->string('name');
			$table->string('author');
			$table->integer('price');
			$table->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     *sss
     * @return void
     */
    public function down(){
	Schema::dropIfExists('books');
    
       
    }
}
