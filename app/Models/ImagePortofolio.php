<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImagePortofolio extends Model
{
    protected $table = 'image_portofolios';

    protected $fillable = [
        'portofolio_id',
        'image',
    ];

    /**
     * Relasi: ImagePortofolio dimiliki oleh satu Portofolio
     */
    public function portofolio()
    {
        return $this->belongsTo(Portofolio::class, 'portofolio_id');
    }
}
