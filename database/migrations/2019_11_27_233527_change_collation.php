<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeCollation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("ALTER TABLE `placements` CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("ALTER TABLE `placements` CONVERT TO CHARACTER SET latin1 COLLATE latin1_swedish_ci");
    }
}
