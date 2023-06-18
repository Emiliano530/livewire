<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formalities extends Model
{
    use HasFactory;

    public function departments() {
        return $this->belongsTo(Department::class,'id_department');
    }

    public $timestamps = false;

    protected $fillable = ['name', 'description', 'id_department'];

    protected function Name(): Attribute
    {
        return new Attribute(
            get: fn($value) => ucfirst($value),

            set: fn($value) => strtolower($value)
        );
    }
    protected function Description(): Attribute
    {
        return new Attribute(
            get: fn($value) => ucfirst($value),

            set: fn($value) => strtolower($value)
        );
    }
    
}
