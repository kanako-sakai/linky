<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Profile extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'education','working_years','employee', 'industry_id', 'job_category_id', 'expat', 'mba','other_study_abroad','returnee','career_change', 'marriage_status', 'child_status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }
    
    public function job_category()
    {
        return $this->belongsTo(JobCategory::class);
    }
}
