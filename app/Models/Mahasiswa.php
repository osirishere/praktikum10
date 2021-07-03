<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; //Model Eloquentuse
use App\Models\Kelas;
use App\Models\Mahasiswa_Matakuliah;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table="mahasiswa"; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas
    public $timestamps= false; 
    protected  $primaryKey = 'nim'; // Memanggil isi DB Dengan primarykey
    protected $fillable = [
        'Nim',
        'Nama',
        'Kelas_Id',
        'Jurusan',
        'No_Handphone',
        'Email',
        'Tanggal_Lahir',
        'Foto',
        ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
    public function matakuliah(){
        return $this->belongsToMany(MataKuliah::class,'mahasiswa_matakuliah','mahasiswa_id','matakuliah_id')->withPivot('nilai');
    }
}
