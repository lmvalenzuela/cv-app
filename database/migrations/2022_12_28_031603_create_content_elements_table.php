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
        Schema::create('content_elements', function (Blueprint $table) {
            $table->id();
            $table->text('htmlContent');
            $table->enum('contentType', ['text','title','subtitle','spacer']);
            $table->softDeletes();
            $table->timestamps();
            //Foreign keys
            $table->foreignId('contents_id')->constrained('contents');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content_elements');
    }
};
