<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('individual_records', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // FOR SOFT DELETES
            $table->softDeletes();

            // ADDED ATTR
            $table->string('id_number');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('gender');
            $table->date('birthdate');
            $table->float('height');
            $table->float('weight');
            $table->float('bmi');
            $table->string('bmi_category');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('individual_records');
    }
};
