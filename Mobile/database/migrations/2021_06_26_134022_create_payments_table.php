<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('p_transaction_id')->nullable();
            $table->integer('p_user_id')->nullable();
            $table->float('p_money')->nullable()->comment('số tiền thanh toán');
            $table->String('p_note')->nullable()->comment('số tiền thanh toán');
            $table->String('p_vnp_response_code',255)->nullable()->comment('mã phản hồi');
            $table->String('p_code_vnpay',255)->nullable()->comment('mã giao dịch vnpay');
            $table->String('p_code_bank',255)->nullable()->comment('mã ngân hàng');
            $table->dateTime('p_time')->nullable()->comment('Thời gian chuyển khoản');
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
        Schema::dropIfExists('payments');
    }
}
