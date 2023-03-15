<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Kitar\Dynamodb\Model\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['cik', 'name', 'shortname', 'addresses', 'category', 'description', 'ein', 'entityType', 'exchanges', 'filings'];
    protected $primaryKey = 'cik';
    protected $table = 'companies';

    public static function find($id)
    {
        return parent::find([
            'cik' => (int)$id
        ]);
    }
}
