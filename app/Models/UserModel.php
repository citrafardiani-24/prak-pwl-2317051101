<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str; // <-- Tambahkan ini untuk generate UUID

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'user';
    protected $guarded = ['id'];
    public $incrementing = false; //
    protected $keyType = 'string'; // 

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->id)) {
                $model->id = (string) Str::uuid();
            }
        });
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function getUser()
    {
        return $this->join('kelas', 'kelas.id', '=', 'user.kelas_id')
                    ->select('user.*', 'kelas.nama_kelas as nama_kelas')
                    ->orderBy('user.nama', 'ASC')
                    ->get();
    }
}
