<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class registro extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $table = 'registros';

    protected $fillable =
        array(
        'id',
        'codigoUser',
        'nome_completo',
        'nome_empresa',
        'segmento',
        'telefone',
        'email',
        'marca_registrar',
        'resumo',
        );

}
