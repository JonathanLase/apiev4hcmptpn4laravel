<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('iplkandirs', function (Blueprint $table) {
            $table->id();
            $table->integer('pers_no')->unique();
            $table->string('name');
            $table->enum('gender', ['L', 'P']);
            $table->integer('forperiodforpayroll');
            $table->integer('inperiodforpayroll');
            $table->date('start_date');
            $table->date('endofpayrollperiodforperiod');
            $table->date('endofpayrollperiodinperiod');
            $table->string('positionname');
            $table->string('organizationname');
            $table->string('divisionname')->nullable();
            $table->date('dateofbirth');
            $table->string('payrollarea');
            $table->string('persarea');
            $table->string('persareadesc');
            $table->string('perssubarea');
            $table->string('perssubareadesc');
            $table->string('costcenter');
            $table->string('costcentertext');
            $table->integer('empgroup');
            $table->string('empgroupdesc');
            $table->integer('empsubgroup');
            $table->string('empsubgroupdesc');
            $table->string('status')->nullable();
            $table->string('statusdesc');
            $table->string('persongrade');
            $table->string('phdpgolongan');
            $table->string('stax');
            $table->string('skel');
            $table->bigInteger('gajipokokng');
            $table->bigInteger('tunjangantetapng');
            $table->bigInteger('insentifkerja');
            $table->bigInteger('lembur');
            $table->integer('hargaperjam');
            $table->string('jamlembur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iplkandirs');
    }
};
