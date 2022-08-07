<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where()
 * @method static firstOrCreate()
 */
class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';

    protected $guarded = false;

    public function bank(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Bank::class, 'bank_id', 'id');
    }
}
