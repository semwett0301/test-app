<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find(int $int)
 * @method static create()
 * @method static firstOrCreate($data)
 * @method static where()
 * @method static findOrFali($bank)
 * @method static findOrFail($bank)
 */
class Bank extends Model
{
    use HasFactory;

    protected $guarded = false;

    protected $table = 'banks';

    public function comments()
    {
        return $this->hasMany(Comment::class, 'bank_id', 'id');
    }
}
