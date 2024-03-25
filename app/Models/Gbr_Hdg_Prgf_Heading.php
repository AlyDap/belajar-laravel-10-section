<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gbr_Hdg_Prgf_Heading extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    public function ghpHeading()
    {
        return $this->belongsTo(Section_Gbr_Hdg_Prgf::class, 'id_gbr_hdg_prgf', 'id');
    }

    public function paragrafs()
    {
        return $this->hasMany(Gbr_Hdg_Prgf_Heading_Paragraf::class, 'id_gbr_hdg_prgf_head');
    }
}
