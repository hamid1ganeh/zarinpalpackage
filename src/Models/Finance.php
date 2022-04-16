<?php
namespace Hamid1ganhe2s\Payment\Models;

use Illuminate\Database\Eloquent\Model;


class Finance extends Model
{
    protected $table = 'fanance';
    protected $primarykey = '';
    protected $fillable = ['merchandId'];
    protected $hidden = ['id','updated_at'];
}
