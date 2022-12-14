<?php

namespace App\Models;

use App\Models\guru;
use App\Models\Pelanggaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;
    protected $table = "siswas";
    protected $guarded = ['id'];
    // protected $timestamps = false;

    public function guru()
    {
        return $this -> belongsTo(guru::class); 
    }

    public function pelanggaran(){
        return $this->belongsToMany(Pelanggaran::class, 'pelanggaran_siswa', 'siswa_id', 'pelanggaran_id');
    }
}
