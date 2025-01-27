<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('reset_token')->nullable(); // For the reset token
        $table->timestamp('reset_token_expires_at')->nullable(); // Optional: for token expiry
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn(['reset_token', 'reset_token_expires_at']);
    });
}
};
