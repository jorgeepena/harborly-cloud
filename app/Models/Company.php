<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'owner_id'];
    
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function clients()
    {
        return $this->hasMany(Client::class, 'client_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'company_users', 'user_id', 'company_id');
    }
}
