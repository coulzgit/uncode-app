<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acc_datas', function (Blueprint $table) {

            $table->id();
            $table->string('data_index')->nullable(false);
            
            // $table->string('doc_id',64)->nullable(false);
            //nvarchar
            $table->string('sort_order')->nullable(false);//smallInt
            $table->string('brutto',100)->nullable(true);//numeric
            $table->string('brutto_calc',100)->nullable(true);
            $table->string('vat',100)->nullable(true);
            $table->string('vat_pros',100)->nullable(true);
            $table->string('accepted')->nullable(true);
            $table->string('acceptor_id',60)->nullable(true);
            $table->string('accepted_date')->nullable(true);
            $table->string('t1',20)->nullable(true);
            $table->string('t2',20)->nullable(true);
            $table->string('t3',20)->nullable(true);
            $table->string('t4',20)->nullable(true);
            $table->string('t5',20)->nullable(true);

            $table->string('t6',40)->nullable(true);
            $table->string('t7',40)->nullable(true);
            $table->string('t8',40)->nullable(true);
            $table->string('t9',40)->nullable(true);
            $table->string('t10',40)->nullable(true);
            $table->string('t11',40)->nullable(true);
            $table->string('t12',40)->nullable(true);
            $table->string('t13',40)->nullable(true);
            $table->string('t14',40)->nullable(true);
            $table->string('t15',40)->nullable(true);
            $table->string('t16',60)->nullable(true);
            $table->string('t17',60)->nullable(true);
            $table->string('t18',60)->nullable(true);
            $table->string('t19',60)->nullable(true);
            $table->string('t20',60)->nullable(true);
            $table->string('t21',60)->nullable(true);
            $table->string('t22',60)->nullable(true);
            $table->string('t23',60)->nullable(true);
            $table->string('t24',60)->nullable(true);
            $table->string('t25',60)->nullable(true);
            $table->string('t26',80)->nullable(true);

            $table->string('t27',80)->nullable(true);
            $table->string('t28',80)->nullable(true);
            $table->string('t29',80)->nullable(true);
            $table->string('t30',150)->nullable(true);
            $table->string('t31',50)->nullable(true);
            $table->string('t32',50)->nullable(true);
            $table->string('t33',50)->nullable(true);
            $table->string('t34',50)->nullable(true);
            $table->string('t35',50)->nullable(true);
            $table->string('t36',50)->nullable(true);
            $table->string('t37',50)->nullable(true);
            $table->string('t38',50)->nullable(true);
            $table->string('t39',50)->nullable(true);
            $table->string('t40',50)->nullable(true);
            $table->string('t41',50)->nullable(true);
            $table->string('t42',50)->nullable(true);
            $table->string('t43',50)->nullable(true);
            $table->string('t44',50)->nullable(true);
            $table->string('t45',50)->nullable(true);
            $table->string('t46',50)->nullable(true);
            $table->string('t47',50)->nullable(true);
            $table->string('t48',50)->nullable(true);
            $table->string('t49',50)->nullable(true);
            $table->string('t50',50)->nullable(true);
            $table->string('t51',50)->nullable(true);
            $table->string('t52',50)->nullable(true);
            $table->string('t53',50)->nullable(true);
            $table->string('t54',50)->nullable(true);
            $table->string('t55',50)->nullable(true);
            $table->string('t56',50)->nullable(true);
            $table->string('t57',50)->nullable(true);
            $table->string('t58',50)->nullable(true);
            $table->string('t59',50)->nullable(true);
            $table->string('t60',50)->nullable(true);
            $table->string('t61',50)->nullable(true);
            $table->string('t62',50)->nullable(true);
            $table->string('t63',50)->nullable(true);
            $table->string('t64',50)->nullable(true);
            $table->string('t65',50)->nullable(true);
            $table->string('t66',50)->nullable(true);
            $table->string('t67',50)->nullable(true);
            $table->string('t68',50)->nullable(true);
            $table->string('t69',50)->nullable(true);
            $table->string('t70',50)->nullable(true);
            $table->string('t71',50)->nullable(true);
            $table->string('t72',50)->nullable(true);
            $table->string('t73',50)->nullable(true);
            $table->string('t74',50)->nullable(true);
            $table->string('t75',50)->nullable(true);
            $table->string('t76',50)->nullable(true);
            $table->string('t77',50)->nullable(true);
            $table->string('t78',50)->nullable(true);
            $table->string('t79',50)->nullable(true);
            $table->string('t80',50)->nullable(true);
            $table->string('t81',50)->nullable(true);
            $table->string('t82',50)->nullable(true);
            $table->string('t83',100)->nullable(true);
            $table->string('t84',100)->nullable(true);
            $table->string('t85',100)->nullable(true);

            $table->string('n1',100)->nullable(true);
            $table->string('n2',100)->nullable(true);
            $table->string('n3',100)->nullable(true);
            $table->string('n4',100)->nullable(true);
            $table->string('n5',100)->nullable(true);
            $table->string('n6',100)->nullable(true);
            $table->string('n7',100)->nullable(true);
            $table->string('n8',100)->nullable(true);
            $table->string('n9',100)->nullable(true);
            $table->string('n10',100)->nullable(true);
            $table->string('n11',100)->nullable(true);
            $table->string('n12',100)->nullable(true);
            $table->string('n13',100)->nullable(true);
            $table->string('n14',100)->nullable(true);
            $table->string('n15',100)->nullable(true);
            $table->string('n16',100)->nullable(true);
            $table->string('n17',100)->nullable(true);
            $table->string('n18',100)->nullable(true);
            $table->string('n19',100)->nullable(true);
            $table->string('n20',100)->nullable(true);
            $table->string('stamp_date')->nullable(true);
            $table->string('stamp_uid',60)->nullable(true);
            $table->string('net_sum',100)->nullable(true);
            $table->string('net_calc',100)->nullable(true);
            $table->string('layer')->nullable(true);
            $table->string('reviewed')->nullable(true);
            $table->string('reviewer_id',60)->nullable(true);
            $table->string('reviewed_date')->nullable(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acc_datas');
    }
}
