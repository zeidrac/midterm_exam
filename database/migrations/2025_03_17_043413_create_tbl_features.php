<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('tbl_features', function (Blueprint $table) {
            $table->id(); // Primary Key (Auto-Increment)
            $table->string('name'); // Feature Name
            $table->text('description'); // Feature Description
            $table->timestamps(); // Created_at and Updated_at
        });
    }

    public function down(): void {
        Schema::dropIfExists('tbl_features');
    }
};
