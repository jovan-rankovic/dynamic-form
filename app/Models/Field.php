<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Field extends Model
{
    protected $guarded = ['id'];
    protected $hidden = ['id'];

    /**
     * @return BelongsTo
     */
    public function fieldType(): BelongsTo
    {
        return $this->belongsTo(FieldType::class);
    }
}
