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
        Schema::create('role_user', function (Blueprint $table) {
            // GEEN $table->id(); → we gebruiken een samengestelde sleutel
            $table->foreignIdFor(App\Models\User::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(App\Models\Role::class)->constrained()->onDelete('cascade');
            // Zorgt ervoor dat een gebruiker geen twee keer dezelfde rol krijgt
            $table->unique(['user_id', 'role_id']);            // Voeg een index toe voor snelle zoekopdrachten
            $table->index(['user_id', 'role_id']);
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_user');
    }
};
