<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $fillable = [
    'nama',
    'username',
    'email',
    'password',
    'noTelp',
    'jenisKelamin',
    'fotoProfil'];
}
