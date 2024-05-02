<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Radius extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'radius';

    protected $fillable = [
        'user_id',
        'description',
        'name',
        'client',
        'ip_address',
        'technical',
        'create_at',
        'password_radius',
    ];

    protected $casts = [
        'create_at' => 'datetime',
    ];

    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        // Define o evento creating para atualizar o campo last_activity
        static::creating(function ($radius) {
            $radius->last_activity = now();
        });
    }
}
