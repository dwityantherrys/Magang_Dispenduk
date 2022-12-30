<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnVaksin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vaksin', function (Blueprint $table) {
            $table->string('nama')->after('id')->nullable();
            $table->string('tmpt_lahir')->after('nama')->nullable();
            $table->date('tgl_lahir')->after('tmpt_lahir')->nullable();
            $table->string('jenis_kelamin')->after('tgl_lahir')->nullable();
            $table->string('alamat')->after('jenis_kelamin')->nullable();
            $table->string('nohp')->after('alamat')->nullable();
            $table->string('status')->after('nohp')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vaksin', function (Blueprint $table) {
            $table->dropColumn('nama');
            $table->dropColumn('tmpt_lahir');
            $table->dropColumn('tgl_lahir');
            $table->dropColumn('jenis_kelamin');
            $table->dropColumn('alamat');
            $table->dropColumn('nohp');
            $table->dropColumn('status');
        });
    }
}
