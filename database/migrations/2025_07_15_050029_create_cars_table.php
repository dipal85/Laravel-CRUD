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
        Schema::create('cars', function (Blueprint $table) {
            $table->id('car_id');
            $table->string('car_name');
            $table->string('car_image');
            $table->decimal('car_price', 10, 2);
            $table->text('car_details');
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
    $table->boolean('is_admin')->default(false);
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
