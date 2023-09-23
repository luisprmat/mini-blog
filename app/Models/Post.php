<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, Sluggable;

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    protected static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->user_id = auth()->id();
        });
    }

    public function imageUrl(): string
    {
        return $this->image
            ? Storage::disk('public')->url($this->image)
            : 'https://via.placeholder.com/640x480.png/6366f1/ffffff?text=no+image';
    }

    public function excerpt(): Attribute
    {
        $link = '<a href="'.route('posts.show', $this).'" class="font-medium underline text-sky-500 dark:text-sky-700">'.__('read more').'</a>';

        return Attribute::make(
            get: fn () => str($this->body)->limit(300, '... '.$link)->value()
        );
    }

    public function isPublished(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->published_at !== null
        );
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }

    public function scopePublished(Builder $query): void
    {
        $query->whereNotNull('published_at');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
