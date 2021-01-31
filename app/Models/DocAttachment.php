<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $projet_id
 * @property string $doc_id
 * @property string $attachment_name
 * @property string $attachment_file
 * @property string $attachment_owner
 * @property string $attachment_resource
 * @property string $user_org_code
 * @property string $resource_id
 * @property string $attachment_encrypted
 * @property string $original_file_name
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property integer $ID_DOC
 * @property Doc $doc
 */
class DocAttachment extends Model
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
    protected $fillable = ['projet_id', 'doc_id', 'attachment_name', 'attachment_file', 'attachment_owner', 'attachment_resource', 'user_org_code', 'resource_id', 'attachment_encrypted', 'original_file_name', 'created_at', 'updated_at', 'deleted_at', 'ID_DOC'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function doc()
    {
        return $this->belongsTo('App\Models\Doc', 'ID_DOC');
    }
}
