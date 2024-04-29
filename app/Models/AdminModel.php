<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    use HasFactory;
    protected $table = 'admin';
    protected $primaryKey = 'admin_id';
    protected $fillable = [
        'adm_name',
        'adm_active_status',
        'adm_email',
        'adm_password'
    ];
    // public function blog()
    // {
    //     return $this->hasMany(BlogModel::class, 'admin_id');
    // }
}
