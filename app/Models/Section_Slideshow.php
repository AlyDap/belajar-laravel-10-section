<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Section_Slideshow extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    public function urutan_section_slideshow()
    {
        return $this->belongsTo(Urutan_Section::class, 'id_section', 'id');
    }
    public function slideshowGambar()
    {
        return $this->hasMany(Slideshow_Gambar::class);
    }
}
