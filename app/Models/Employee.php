<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 *
 * @property $id
 * @property $nombre
 * @property $apellido_paterno
 * @property $apellido_materno
 * @property $CI
 * @property $direccion
 * @property $telefono
 * @property $fecha_ingreso
 * @property $fecha_nacimiento
 * @property $cargo_actual
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Employee extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'apellido_paterno', 'apellido_materno', 'CI', 'direccion', 'telefono', 'fecha_ingreso', 'fecha_nacimiento', 'cargo_actual'];



}
