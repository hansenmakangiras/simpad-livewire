<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisWajibPajak extends Model
{
    public $table = 'jenis_wp';

    protected $fillable = ['nama_jenis_wp'];
    public $timestamps = false;

  public function scopeSearch($query, $term)
  {
    $term = "%{$term}%";
    $query->where('nama_jenis_wp', 'like', $term);
  }
}
