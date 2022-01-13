<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Messange extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'chat_id',
        'text',
    ];

    public function chat(): BelongsTo
    {
        return $this->BelongsTo(Chat::class);
    }

    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }

}
