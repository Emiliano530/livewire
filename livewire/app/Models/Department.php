<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Building;
use App\Models\Staff;
use App\Models\Formalities;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Department extends Model
{
    use HasFactory; 

    public function buildings() {
        return $this->belongsTo(Building::class,'id_building');
    }

    public function staff() {
        return $this->hasMany(Staff::class,'id_staff');
    }

    public function formalities() {
        return $this->hasMany(Formalities::class,'id_formalities');
    }

    public $timestamps = false;

    protected $fillable = ['name', 'description', 'id_building'];

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
