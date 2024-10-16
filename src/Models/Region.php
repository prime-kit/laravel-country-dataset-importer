<?php

namespace PrimeKit\LaravelCountryDatasetImporter\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'wikiDataId', 'translations'];

    protected $casts = [
        'translations' => 'array',
    ];
}
