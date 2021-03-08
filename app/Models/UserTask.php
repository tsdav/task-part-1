<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTask extends Model
{
    use HasFactory;

    protected $table = 'user_tasks';
    
    protected $primaryKey = 'id';

    protected $fillable = ['role_id','name','surname','username'];

    public function role(){
        return $this->belongTo(Role::class);
    }

}
