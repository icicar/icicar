<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFieldsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table) {
            $table->string('last_name', 100)->after('name')->nullable();
            $table->string('cif', 15)->after('last_name')->nullable();
            $table->string('phone', 13)->after('cif')->nullable();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table) {
            $table->dropColumn('last_name');
            $table->dropColumn('cif');
            $table->dropColumn('phone');
        } );
    }
}
