<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    
    // Table yang digunakan (opsional, jika nama model dan table tidak sesuai konvensi)
    protected $table = 'clients';

    // Kolom yang bisa diisi secara mass assignment
    protected $fillable = [
        'name',
        'email_client',
        'description',
        'logo_image',
    ];

    public function portofolios()
    {
        return $this->hasMany(Portofolio::class, 'client_id');
    }
}
