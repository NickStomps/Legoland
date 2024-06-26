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
        Schema::table('accommodaties', function (Blueprint $table) {
            // Add 'name' column
            $table->string('name');

            // Add 'description' column
            $table->longText('description');

            // Add 'imgPath' column
            $table->string('imgPath');

            // You can also add timestamps if needed
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('accommodaties', function (Blueprint $table) {
            // Drop 'name' column
            $table->dropColumn('name');

            // Drop 'description' column
            $table->dropColumn('description');

            // Drop 'imgPath' column
            $table->dropColumn('imgPath');
        });
    }
};
