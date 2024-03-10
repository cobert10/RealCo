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
        Schema::create('property_information', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('listing_id')->unsigned()->index()->nullable();
            // $table->foreign('listing_id')->references('id')->on('listings')->onDelete('cascade');
            $table->string('type');
            $table->string('purpose');
            $table->string('reference_number');
            $table->string('furnishing');
            $table->string('trucheck');
            $table->date('added_on');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_information');
    }
};
