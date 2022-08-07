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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text("content");
            $table->string("topic");

            $table->softDeletes();

            $table->unsignedBigInteger("bank_id");
            $table->index('bank_id', 'comment_bank_idx');
            $table->foreign("bank_id", 'comment_bank_fk')->on("banks")->references('id');
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
        Schema::dropIfExists('comments');
    }
};
