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
    Schema::create('notifications', function (Blueprint $table) {
        $table->id();
        $table->string('item_description');
        $table->string('strength');
        $table->integer('stock_balance');
        $table->integer('quantity_requested');
        $table->integer('quantity_issued_by_pharmacy');
        $table->integer('quantity_collected_from_pharmacy');
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
        Schema::dropIfExists('notifications');
    }
};
