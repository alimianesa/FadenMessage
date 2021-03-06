<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFadenMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faden_messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("message_type")->nullable();

            // Author
            $table->integer("author_id")->default(1);
            $table->string("bc")->nullable();
            $table->string('to');
            $table->string('cc')->nullable();

            // Content
            $table->text("body")->nullable();
            $table->string("title")->nullable();
            $table->string("subtitle")->nullable();

            // Push
            $table->string("push_title")->nullable();
            $table->string("push_sound")->nullable();
            $table->text("push_body")->nullable();
            $table->boolean("push_bulk")->nullable();


            // Active
            $table->boolean('active')->nullable()->default(1);
            $table->string('priority')->nullable()->default('immediately');
            $table->unsignedBigInteger("sent_at")->nullable();

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
        Schema::dropIfExists('faden_messages');
    }
}
