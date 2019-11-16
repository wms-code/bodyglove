<?php

namespace App\Model;
use App\Http\Controllers\Admin;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table='size';
    protected $guarded=['active'];
  
    protected function getall()
    {
        return $this->select('id','name')        
        ->orderBy('name')
        ->get();
    }
}
