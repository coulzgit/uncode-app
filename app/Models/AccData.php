<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer $id
 * @property string $doc_id
 * @property string $sort_order
 * @property string $brutto
 * @property string $brutto_calc
 * @property string $vat
 * @property string $vat_pros
 * @property string $accepted
 * @property string $acceptor_id
 * @property string $accepted_date
 * @property string $t1
 * @property string $t2
 * @property string $t3
 * @property string $t4
 * @property string $t5
 * @property string $t6
 * @property string $t7
 * @property string $t8
 * @property string $t9
 * @property string $t10
 * @property string $t11
 * @property string $t12
 * @property string $t13
 * @property string $t14
 * @property string $t15
 * @property string $t16
 * @property string $t17
 * @property string $t18
 * @property string $t19
 * @property string $t20
 * @property string $t21
 * @property string $t22
 * @property string $t23
 * @property string $t24
 * @property string $t25
 * @property string $t26
 * @property string $t27
 * @property string $t28
 * @property string $t29
 * @property string $t30
 * @property string $t31
 * @property string $t32
 * @property string $t33
 * @property string $t34
 * @property string $t35
 * @property string $t36
 * @property string $t37
 * @property string $t38
 * @property string $t39
 * @property string $t40
 * @property string $t41
 * @property string $t42
 * @property string $t43
 * @property string $t44
 * @property string $t45
 * @property string $t46
 * @property string $t47
 * @property string $t48
 * @property string $t49
 * @property string $t50
 * @property string $t51
 * @property string $t52
 * @property string $t53
 * @property string $t54
 * @property string $t55
 * @property string $t56
 * @property string $t57
 * @property string $t58
 * @property string $t59
 * @property string $t60
 * @property string $t61
 * @property string $t62
 * @property string $t63
 * @property string $t64
 * @property string $t65
 * @property string $t66
 * @property string $t67
 * @property string $t68
 * @property string $t69
 * @property string $t70
 * @property string $t71
 * @property string $t72
 * @property string $t73
 * @property string $t74
 * @property string $t75
 * @property string $t76
 * @property string $t77
 * @property string $t78
 * @property string $t79
 * @property string $t80
 * @property string $t81
 * @property string $t82
 * @property string $t83
 * @property string $t84
 * @property string $t85
 * @property string $n1
 * @property string $n2
 * @property string $n3
 * @property string $n4
 * @property string $n5
 * @property string $n6
 * @property string $n7
 * @property string $n8
 * @property string $n9
 * @property string $n10
 * @property string $n11
 * @property string $n12
 * @property string $n13
 * @property string $n14
 * @property string $n15
 * @property string $n16
 * @property string $n17
 * @property string $n18
 * @property string $n19
 * @property string $n20
 * @property string $stamp_date
 * @property string $stamp_uid
 * @property string $net_sum
 * @property string $net_calc
 * @property string $layer
 * @property string $reviewed
 * @property string $reviewer_id
 * @property string $reviewed_date
 * @property string $created_at
 * @property string $updated_at
 * @property integer $ID_DOC
 * @property Doc $doc
 * @property AccDataName[] $accDataNames
 */
class AccData extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    use SoftDeletes;

    public $table = 'acc_datas';
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['doc_id', 'sort_order', 'brutto', 'brutto_calc', 'vat', 'vat_pros', 'accepted', 'acceptor_id', 'accepted_date', 't1', 't2', 't3', 't4', 't5', 't6', 't7', 't8', 't9', 't10', 't11', 't12', 't13', 't14', 't15', 't16', 't17', 't18', 't19', 't20', 't21', 't22', 't23', 't24', 't25', 't26', 't27', 't28', 't29', 't30', 't31', 't32', 't33', 't34', 't35', 't36', 't37', 't38', 't39', 't40', 't41', 't42', 't43', 't44', 't45', 't46', 't47', 't48', 't49', 't50', 't51', 't52', 't53', 't54', 't55', 't56', 't57', 't58', 't59', 't60', 't61', 't62', 't63', 't64', 't65', 't66', 't67', 't68', 't69', 't70', 't71', 't72', 't73', 't74', 't75', 't76', 't77', 't78', 't79', 't80', 't81', 't82', 't83', 't84', 't85', 'n1', 'n2', 'n3', 'n4', 'n5', 'n6', 'n7', 'n8', 'n9', 'n10', 'n11', 'n12', 'n13', 'n14', 'n15', 'n16', 'n17', 'n18', 'n19', 'n20', 'stamp_date', 'stamp_uid', 'net_sum', 'net_calc', 'layer', 'reviewed', 'reviewer_id', 'reviewed_date', 'created_at', 'updated_at', 'ID_DOC'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function doc()
    {
        return $this->belongsTo('App\Models\Doc', 'ID_DOC');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function accDataNames()
    {
        return $this->hasMany('App\Models\AccDataName');
    }
}
