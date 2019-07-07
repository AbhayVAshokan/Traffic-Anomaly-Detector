<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Camera extends Model{
    protected $table = 'camera';
    protected $fillable = ['camera_id','latitude','longitude'];
    protected $primaryKey = 'camera_id';
}