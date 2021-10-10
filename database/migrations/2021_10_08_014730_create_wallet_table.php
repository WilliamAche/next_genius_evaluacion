<?php

// Illuminate
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWalletTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallet', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user')->unsigned();
            $table->enum('status', [0, 1])->default(0)->comment('0 - Inactiva, 1 - Activa');
            $table->longtext('address')->nullable();
            $table->decimal('balance')->nullable()->comment('balance de la billetera');
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
        Schema::dropIfExists('wallet');
    }
}
