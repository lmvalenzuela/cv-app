<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContentElement extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var bool
     */
    public $incrementing = true;

    /**
     * @var array
     */
    protected $fillable = ['htmlContent', 'contentType'];

    //Relations

    /**
     * Gets the content parent of the element.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getContent()
    {
        return $this->belongsTo(Content::class);
    }

}
