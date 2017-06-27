<?php

namespace SMDRide;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Ride extends Model
{
    protected $fillable = [
        'address',
        'date',
        'car',
    ];

    protected $dates = [self::CREATED_AT, self::UPDATED_AT, 'date'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function driver()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function passengers()
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * Filter up to date rides
     * @param Builder $query
     * @return Builder
     */
    public function scopeUpToDate(Builder $query)
    {
        return $query->where('date', '>=', Carbon::today());
    }

}