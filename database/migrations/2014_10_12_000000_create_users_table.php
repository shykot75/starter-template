<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\User\UserEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(UserEnum::DB_TABLE, function (Blueprint $table) {
            $table->id(UserEnum::ID)->autoIncrement();
            $table->string(UserEnum::FIRST_NAME);
            $table->string(UserEnum::LAST_NAME);
            $table->string(UserEnum::NAME)->nullable();
            $table->string(UserEnum::USERNAME);
            $table->string(UserEnum::EMAIL)->unique();
            $table->string(UserEnum::PASSWORD);
            $table->string(UserEnum::PHONE_NO)->unique();
            $table->tinyInteger(UserEnum::STATUS)->default(UserEnum::STATUS_ACTIVE);
            $table->string(UserEnum::USER_TYPE)->default(UserEnum::USER_TYPE_FREE);
            $table->text(UserEnum::IMAGE)->nullable();
            $table->timestamp(UserEnum::EMAIL_VERIFIED_AT)->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(UserEnum::DB_TABLE);
    }
};
