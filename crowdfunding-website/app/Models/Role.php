<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUuid;

class Role extends Model
{
    use HasFactory, UsesUuid;

    protected $fillable = ['name'];

    protected $primaryKey = 'id';

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
