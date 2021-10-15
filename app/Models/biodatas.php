<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class biodatas extends Model
{
    use HasFactory;
    protected $fiellable = ['name', 'borndate', 'gender', 'address', 'religion', 'age', 'hobby'];
}
