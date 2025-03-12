<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\Admin\AdminEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(AdminEnum::DB_TABLE, function (Blueprint $table) {
            $table->id(AdminEnum::ID)->autoIncrement();
            $table->string(AdminEnum::FIRST_NAME);
            $table->string(AdminEnum::LAST_NAME);
            $table->string(AdminEnum::NAME)->nullable();
            $table->string(AdminEnum::USERNAME);
            $table->string(AdminEnum::EMAIL)->unique();
            $table->string(AdminEnum::PASSWORD);
            $table->string(AdminEnum::PHONE_NO)->unique();
            $table->tinyInteger(AdminEnum::STATUS)->default(AdminEnum::STATUS_ACTIVE);
            $table->tinyInteger(AdminEnum::ROLE_ID)->nullable();
            $table->text(AdminEnum::IMAGE)->nullable();
            $table->timestamp(AdminEnum::EMAIL_VERIFIED_AT)->nullable();
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
        Schema::dropIfExists(AdminEnum::DB_TABLE);
    }
};
