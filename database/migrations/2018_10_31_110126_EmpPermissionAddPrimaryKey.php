<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmpPermissionAddPrimaryKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::query('ALTER TABLE `ag_emp_permission` ADD PRIMARY KEY( `id`)');
        DB::query('ALTER TABLE `ag_emp_permission` CHANGE `id` `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
