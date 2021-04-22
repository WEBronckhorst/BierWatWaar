<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('naam');
            $table->string('slug');
            $table->string('email');
            $table->string('adres');
            $table->string('postcode');
            $table->string('plaats');
            $table->string('land');
            $table->string('telefoon');
            $table->string('kvk')->nullable();
            $table->string('link_fb')->nullable();
            $table->string('link_in')->nullable();
            $table->string('link_tw')->nullable();
            $table->string('link_yt')->nullable();
            $table->string('link_Web')->nullable();
            $table->string('tump')->nullable();
            $table->string('logo')->nullable();
            $table->INTEGER('status')->default("1");
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
        Schema::dropIfExists('organizations');
    }
}
