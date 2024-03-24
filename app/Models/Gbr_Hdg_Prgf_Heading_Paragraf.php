<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gbr_Hdg_Prgf_Heading_Paragraf extends Model
{

    use HasFactory, SoftDeletes;

    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    public function urutan_section_slideshow()
    {
        return $this->belongsTo(Gbr_Hdg_Prgf_Heading::class, 'id_gbr_hdg_prgf_head', 'id');
    }
}
