<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticketify_departments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });

        Schema::create('ticketify_departments_users', function (Blueprint $table) {
            $table->integer('department_id')->unsigned();
            $table->integer('user_id')->unsigned();
        });

        Schema::create('ticketify_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });
        Schema::create('ticketify_replies', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('content');
            $table->integer('user_id')->unsigned();
            $table->integer('ticket_id')->unsigned();
            $table->timestamps();
        });

        Schema::create('ticketify', function (Blueprint $table) {
            $table->id();
            $table->string('subject');
            $table->longText('content');
            $table->enum('status',[App\Enumoration\Ticket\TicketStatus::statuses]);
            $table->enum('priority',[\App\Enumoration\Ticket\TicketPriority::statuses]);
            $table->integer('department_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticketify_departments');
        Schema::dropIfExists('ticketify_departments_users');
        Schema::dropIfExists('ticketify_categories');
        Schema::dropIfExists('ticketify_replies');
        Schema::dropIfExists('ticketify');

    }
}
