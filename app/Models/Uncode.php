<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $app_logo
 * @property string $favicon
 * @property string $app_name
 * @property string $contact_url
 * @property string $telephone1
 * @property string $telephone2
 * @property string $domaine
 * @property string $email
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Uncode extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['app_logo', 'favicon', 'app_name', 'contact_url', 'telephone1', 'telephone2', 'domaine', 'email', 'created_at', 'updated_at', 'deleted_at'];

}
