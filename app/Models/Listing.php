<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false){
            $query->where('type', 'like', '%' . request('search'). '%')
            ->orWhere('location', 'like', '%' . request('search'). '%');
        }

    }
}
