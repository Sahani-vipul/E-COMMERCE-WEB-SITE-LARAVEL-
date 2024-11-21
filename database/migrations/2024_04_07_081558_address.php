<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Address', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('User_id');
            $table->foreign('User_id')->references('id')->on('users');
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->string('Delivery_address');
            $table->string('Address');
            $table->string('City');
            $table->string('State');
            $table->string('Country');
            $table->integer('Zip_Code');
            $table->bigInteger('Phone_Number');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
