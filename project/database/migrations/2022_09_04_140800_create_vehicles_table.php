<?php

use App\Models\Company;
use App\Models\RegistrationCard;
use App\Models\VehicleType;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('status', 30)->default(1);
            $table->string('license_plate',20);
            $table->string('photos')->nullable();
            $table->foreignIdFor(Company::class)->nullable();
            $table->foreignIdFor(VehicleType::class)->nullable();
            $table->foreignIdFor(User::class)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
};
