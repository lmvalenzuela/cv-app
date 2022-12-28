<?php
/**
 * @author Luis Miguel Valenzuela <lmvalenzuela@ctrl-zeta.com>
 * @since V1
 * @class Content model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Content extends Model
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
     * @var string[]
     */
    protected $fillable = [
        'order',
        'name'
    ];

    //Relations

    /**
     * Gets all the content elements for a given content
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getContentElements()
    {
        return $this->hasMany(ContentElement::class);
    }

    /**
     * Gets tha parent section for the given content.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getSection()
    {
        return $this->belongsTo(Section::class);
    }
}
