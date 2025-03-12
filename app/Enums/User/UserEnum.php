<?php

namespace App\Enums\User;

enum UserEnum
{
    public const DB_TABLE = 'users';
    public const ID = 'id';
    public const FIRST_NAME = 'first_name';
    public const LAST_NAME = 'last_name';
    public const NAME = 'name';
    public const USERNAME = 'username';
    public const EMAIL = 'email';
    public const PASSWORD = 'password';
    public const PHONE_NO = 'phone_no';
    public const STATUS = 'status';
    public const USER_TYPE = 'user_type';
    public const IMAGE = 'image';
    public const EMAIL_VERIFIED_AT = 'email_verified_at';

    public const ALL_FIELDS = [
        self::ID,
        self::FIRST_NAME,
        self::LAST_NAME,
        self::NAME,
        self::USERNAME,
        self::EMAIL,
        self::PASSWORD,
        self::PHONE_NO,
        self::STATUS,
        self::USER_TYPE,
        self::IMAGE,
        self::EMAIL_VERIFIED_AT,
    ];

    public const STATUS_ACTIVE = 1;
    public const STATUS_INACTIVE = 0;
    public const STATUS_BLOCK = 2;
    public const ALL_STATUS = [
        "Active" => self::STATUS_ACTIVE,
        "Inactive" => self::STATUS_INACTIVE,
        "Block" => self::STATUS_BLOCK,
    ];

    public const USER_TYPE_FREE = 'free';
    public const USER_TYPE_PREMIUM = 'premium';
    public const ALL_USER_TYPE = [
        "Free" => self::USER_TYPE_FREE,
        "Premium" => self::USER_TYPE_PREMIUM,
    ];

}
