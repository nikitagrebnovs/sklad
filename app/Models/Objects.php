<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objects extends Model
{
    use HasFactory;

    protected $fillable = ['client_name', 'object_address', 'status', 'assigned_to', 'source', 'date', 'amount', 'client_paid', 'description'];


}
