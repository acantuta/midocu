<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpedientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expedientes', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('remitente_persona_id')->nullable();
            $table->string('remitente_nombre_completo')->nullable();
            $table->string('asunto')->nullable();
            $table->string('nro')->nullable();
            $table->string('cabecera')->nullable();
            $table->string('prioridad')->default('normal');
            $table->integer('folios')->unsigned()->nullable();
            $table->datetime('fecha_limite')->nullable();
            $table->text('observaciones')->nullable();
            $table->enum('origen', ['interno', 'externo']);
            $table->integer('area_id')->nullable();
            $table->integer('expediente_tipo_id');
            $table->string('estado')->nullable();
            $table->softDeletes();
            $table->timestamps();

            //Foreign key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expedientes');
    }
}
