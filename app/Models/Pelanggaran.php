<?php

namespace App\Models;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pelanggaran extends Model
{
    use HasFactory;
    protected $table = "pelanggaran";
    protected $guarded = [];

    protected function siswa(){
        return $this->belongsToMany(Siswa::class, 'pelanggaran_siswa', 'siswa_id', 'pelanggaran_id');
    }
}
