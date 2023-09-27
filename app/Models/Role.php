<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model{
    use HasFactory;
    protected $fillable = [
        'name', // Add 'name' to the fillable array
        'description', // If you have other fillable fields, add them here as well
    ];
    public function users() {
        return $this->hasMany(User::class);
    }
}
