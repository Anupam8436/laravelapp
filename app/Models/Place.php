<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{

        use HasFactory;
        protected $table = "address_detail";
        public $timestamps = true;
        protected $fillable = ['location', 'city', 'state', 'country'];
        protected $visible = ['location', 'city', 'state', 'country'];


}
