<?php

namespace App\Models;

use App\Traits\Actor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Urutan_Section extends Model
{
    use HasFactory, SoftDeletes;
    use Actor;

    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    public function slideImages()
    {
        return $this->hasMany(Section_Slideshow::class, 'id_section');
    }

    public function map()
    {
        return $this->hasOne(Section_Peta::class, 'id_section');
    }

    public function ghp()
    {
        return $this->hasOne(Section_Gbr_Hdg_Prgf::class, 'id_section');
    }

    public function who()
    {
        return $this->me;
    }

    // public function staf()
    // {
    //     return $this->hasMany(Staf::class);
    // }

    // public function created_by()
    // {
    //     return $this->belongsTo(User::class, 'created_by', 'id');
    // }

    // public function updated_by()
    // {
    //     return $this->belongsTo(User::class, 'updated_by', 'id');
    // }

    // public function deleted_by()
    // {
    //     return $this->belongsTo(User::class, 'deleted_by', 'id');
    // }
}
