<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $table = 'portofolios';

    protected $fillable = [
        'client_id',
        'name',
        'description',
        'image',
        'url',
    ];

    /**
     * Relasi: Portofolio dimiliki oleh satu Client
     */
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
