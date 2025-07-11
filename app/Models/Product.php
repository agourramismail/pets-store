<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'category',
        'image',
    ];

    protected $casts = [
        'price' => 'decimal:2',
    ];

    public function getFormattedPriceAttribute()
    {
        return number_format($this->price, 2, ',', ' ') . ' DH';
    }

    public function getCategoryLabelAttribute()
    {
        $labels = [
            'chat' => 'Chat',
            'chien' => 'Chien',
            'oiseau' => 'Oiseau',
        ];
        
        return $labels[$this->category] ?? $this->category;
    }

    public function getImageUrlAttribute()
    {
        // Uploaded image in storage
        if ($this->image && $this->image !== 'default-product.jpg' && !str_starts_with($this->image, 'img/')) {
            return asset('storage/' . $this->image);
        }
        // Seeded/public image in /img
        if ($this->image && (str_starts_with($this->image, 'img/') || str_ends_with($this->image, '.webp') || str_ends_with($this->image, '.jpg') || str_ends_with($this->image, '.png'))) {
            return asset('img/' . ltrim(str_replace('img/', '', $this->image), '/'));
        }
        // Fallback
        return asset('img/default-product.jpg');
    }
} 