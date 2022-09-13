<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Listing extends Model
{
    use HasFactory;

    protected $table = "listings";
    protected $fillable = ["title","file_name","listing_data","price","listing_quantity","explanation"];

    public function user() {
        return $this->belongsTo(User::class, 'username');
    }
}
