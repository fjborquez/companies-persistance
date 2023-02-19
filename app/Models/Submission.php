<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Kitar\Dynamodb\Model\Model;

class Submission extends Model
{
    use HasFactory;

    protected $fillable = ['cik', 'addresses', 'category', 'description', 'ein', 'entityType', 'exchanges', 'filings'];
    protected $primaryKey = 'cik';
    protected $table = 'submissions';
}
