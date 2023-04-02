<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\Category;
use App\Models\Collaborator;

class Service extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'services';
    protected $primaryKey = 'service_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'category_id',
        'price',
        'collab_id'
    
    ];

    /**
     * Get the user that owns the phone.
     */
    public function category(): HasOne
    {
        return $this->hasOne(Category::class, 'category_id', 'category_id');
    }

    public function collaborator(): HasOne 
    {
        return $this->hasOne(Collaborator::class, 'collab_id', 'collab_id');
    }
}
