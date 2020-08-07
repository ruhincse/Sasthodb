<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agentinfos', function (Blueprint $table) {
            $table->id();
            $table->string('org_name');
            $table->foreignId('area_id');
            $table->foreignId('user_id');
            $table->string('org_mobile');
            $table->string('org_address');
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
        Schema::dropIfExists('agentinfos');
    }
}
