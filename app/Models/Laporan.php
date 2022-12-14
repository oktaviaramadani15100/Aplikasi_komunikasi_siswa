<?php

namespace App\Models;

use App\Models\Siswa;
use App\Models\Pelanggaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Laporan extends Model
{
    use HasFactory;

    protected $table = 'pelanggaran_siswa';
    protected $guarded = [];

    public function siswa(){
        return $this->belongsToMany(Siswa::class, 'pelanggaran_siswa', 'id');
    }

    public function pelanggaran(){
        return $this->belongsToMany(Pelanggaran::class, 'pelanggaran_siswa', 'id');
    }
}
