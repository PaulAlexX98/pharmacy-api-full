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
        Schema::create('patient_intakes', function (Blueprint $t) {
            $t->id();
            $t->enum('type', ['new_patient','transfer_patient']);
            $t->enum('status', ['pending','approved','rejected'])->default('pending');
            $t->unsignedBigInteger('patient_id')->nullable();
            $t->string('first_name');
            $t->string('last_name');
            $t->date('dob');
            $t->string('phone')->nullable();
            $t->string('email')->nullable();
            $t->string('address_line1')->nullable();
            $t->string('address_line2')->nullable();
            $t->string('city')->nullable();
            $t->string('postcode')->nullable();
            $t->string('nhs_number')->nullable();
            $t->string('current_pharmacy')->nullable();
            $t->text('notes')->nullable();
            $t->boolean('consent_signed')->default(false);
            $t->json('attachments')->nullable();
            $t->json('assessment')->nullable();
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_intakes');
    }
};
