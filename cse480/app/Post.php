<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends BaseModel
{
    protected $primaryKey = 'id';
    protected $table = 'users';
    protected $fillable = array('name', 'email', 'password', 'created_at_ip', 'updated_at_ip');
}
