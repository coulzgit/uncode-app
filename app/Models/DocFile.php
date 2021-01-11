<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $doc_id
 * @property string $doc_page
 * @property string $doc_file
 * @property string $file_format
 * @property string $file_resource
 * @property string $user_org_code
 * @property string $file_encrypted
 * @property string $external_ref
 * @property string $created_at
 * @property string $updated_at
 * @property Doc $doc
 */
class DocFile extends Model
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
    protected $fillable = ['doc_id', 'doc_page', 'doc_file', 'file_format', 'file_resource', 'user_org_code', 'file_encrypted', 'external_ref', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function doc()
    {
        return $this->belongsTo('App\Models\Doc');
    }
}
