<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{

    public $timestamps = true;

    protected $table = 'places';

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $guarded = ['id'];

}
