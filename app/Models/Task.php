<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // Ye fields database mein save hone ke liye allowed hain
    protected $fillable = ['title', 'description'];
}
