<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemoRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'corporate_email',
        'phone_number',
        'company_name',
        'job_title',
        'operating_environment',
        'products',
        'demo_format',
        'demo_timeline',
        'project_details',
        'status',
    ];

    protected $casts = [
        'products' => 'array',
    ];
}
