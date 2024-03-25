<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Section_Gbr_Hdg_Prgf extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    public function urutan_section_GHP()
    {
        return $this->belongsTo(Urutan_Section::class, 'id_section', 'id');
    }

    public function images()
    {
        return $this->hasMany(Gbr_Hdg_Prgf_Gambar::class, 'id_gbr_hdg_prgf');
    }

    public function heading()
    {
        return $this->hasMany(Gbr_Hdg_Prgf_Heading::class, 'id_gbr_hdg_prgf');
    }
}
