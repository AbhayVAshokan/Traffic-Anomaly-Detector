<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Accident extends Model{
    protected $table = 'accident';
    protected $fillable = ['location','camera_id','image','created_at'];
    protected $primaryKey = 'id';
}