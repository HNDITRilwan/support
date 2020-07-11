<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('tickets_id');
            $table->integer('ticket_code')->unique();
            $table->string('customer_name');
            $table->text('problem_description');
            $table->string('email');
            $table->string('phone_no');
            $table->integer('agent_id')->unsigned();
            $table->smallInteger('status')->default(0)->comment("0 => pending, 1 => opened, 2=>closed");
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
        Schema::dropIfExists('tickets');
    }
}
