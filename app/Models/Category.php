<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded= [];

    /**
     * Get the parent that owns the Category
     *
     * @return void
     */
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    /**
     * Get all of the children for the Category
     *
     * @return void
     */
    public function children()
    {
        return $this->hasMany(Category::class,'parent_id');
    }
}
