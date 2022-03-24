<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_name','service_description','service_price','category_id'
    ];
    // protected $primaryKey = 'service_id';
    public function users()
    {
        return $this->belongsToMany(User::class, 'services_users')
            ->withPivot('id')
            ->withPivot('service_name')
            ->withPivot('mobile_number')
            ->withPivot('date')
            ->withPivot('time')
            ->withPivot('status')
            ->withPivot('note');
    }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

}
