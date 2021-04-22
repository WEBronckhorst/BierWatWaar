<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('locatie_id');
            $table->foreignId('organization_id');
            $table->string('genres_id');
            $table->string('titel');
            $table->string('sub_titel')->nullable();
            $table->string('slug');
            $table->text('description')->nullable();
           
            $table->date('stard_datum')->nullable();
            $table->date('eind_datum')->nullable();
            $table->time('stard_tijd', $precision = 0)->nullable();
            $table->time('aanvang_tijd', $precision = 0)->nullable();
            $table->time('eind_tijd', $precision = 0)->nullable();
            $table->string('prijs_vvd')->nullable();
            $table->string('prijs_add')->nullable();
            $table->string('artiesten')->nullable();
            $table->string('link_vvd')->nullable();
            $table->string('link_fb_event')->nullable();
            $table->string('tump')->nullable();
            $table->integer('info')->nullable();
            $table->integer('thema')->default("1");
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
        Schema::dropIfExists('events');
    }
}
