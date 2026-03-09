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
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique('users_workos_id_unique');
            $table->dropColumn('workos_id');
            $table->string('password')->after('email')->nullable();
            $table->text('avatar')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('password');
            $table->string('workos_id')->unique();
            $table->text('avatar')->nullable(false)->change();
        });
    }
};
