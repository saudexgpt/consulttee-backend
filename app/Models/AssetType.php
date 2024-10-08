<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetType extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'client_id'];
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function assets()
    {
        return $this->hasMany(Asset::class);
    }
}
