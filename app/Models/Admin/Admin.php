<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Enums\Admin\AdminEnum;

class Admin extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = AdminEnum::DB_TABLE;
    protected $primaryKey = AdminEnum::ID;
    protected $fillable = AdminEnum::ALL_FIELDS;
}
