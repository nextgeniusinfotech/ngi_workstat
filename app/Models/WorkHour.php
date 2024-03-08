<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class WorkHour extends Model
{
    use HasFactory, SoftDeletes, Searchable;

    protected $fillable = [
        'user_id',
        'category_id',
        'project_id',
        'date',
        'hour',
        'remark',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
