<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'tbltoko';
    public $timestamp = false;
    protected $fillable = [
        'name', 
        'description', 
        'price',
    ];

    // Dikarenakan Laravel masih menginput Timestamp meskipun timestamp sudah false pada saat insert data jadi saya menambahkan code ini
    public function save(array $options = [])
    {
       
        $this->timestamps = false;
        
        $saved = parent::save($options);

       
        $this->timestamps = true;

        return $saved;
    }
}
