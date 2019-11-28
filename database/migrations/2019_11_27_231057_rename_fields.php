<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('placements', function ($table) {
            $table->renameColumn('Nom', 'lastname');
            $table->renameColumn('Prenom', 'firstname');
            $table->renameColumn('AdresseElectronique', 'email');
            $table->renameColumn('Grammaire', 'years');
            if (Schema::hasColumn('placements', '1_1')) {
                $table->renameColumn('1_1', 'q1_1');
                $table->renameColumn('1_2', 'q1_2');
                $table->renameColumn('1_3', 'q1_3');
                $table->renameColumn('1_4', 'q1_4');
                $table->renameColumn('1_5', 'q1_5');
                $table->renameColumn('1_6', 'q1_6');
                $table->renameColumn('1_7', 'q1_7');
                $table->renameColumn('1_8', 'q1_8');
                $table->renameColumn('1_9', 'q1_9');
                $table->renameColumn('1_10', 'q1_10');
                $table->renameColumn('1_11', 'q1_11');
                $table->renameColumn('1_12', 'q1_12');
                $table->renameColumn('1_13', 'q1_13');
                $table->renameColumn('1_14', 'q1_14');
                $table->renameColumn('1_15', 'q1_15');
                $table->renameColumn('1_16', 'q1_16');
                $table->renameColumn('1_17', 'q1_17');
                $table->renameColumn('1_18', 'q1_18');
                $table->renameColumn('1_19', 'q1_19');
                $table->renameColumn('1_20', 'q1_20');
                $table->renameColumn('1_21', 'q1_21');
                $table->renameColumn('1_22', 'q1_22');
                $table->renameColumn('2_1', 'q2_1');
                $table->renameColumn('2_2', 'q2_2');
                $table->renameColumn('2_3', 'q2_3');
                $table->renameColumn('2_4', 'q2_4');
                $table->renameColumn('2_5', 'q2_5');
                $table->renameColumn('2_6', 'q2_6');
                $table->renameColumn('3_1', 'q3_1');
                $table->renameColumn('3_2', 'q3_2');
                $table->renameColumn('3_3', 'q3_3');
                $table->renameColumn('3_4', 'q3_4');
                $table->renameColumn('3_5', 'q3_5');
                $table->renameColumn('3_6', 'q3_6');
                $table->renameColumn('3_7', 'q3_7');
                $table->renameColumn('3_8', 'q3_8');
                $table->renameColumn('3_9', 'q3_9');
                $table->renameColumn('3_10', 'q3_10');
                $table->renameColumn('3_11', 'q3_11');
                $table->renameColumn('3_12', 'q3_12');
                $table->renameColumn('3_13', 'q3_13');
                $table->renameColumn('3_14', 'q3_14');
                $table->renameColumn('3_15', 'q3_15');
                $table->renameColumn('3_16', 'q3_16');
                $table->renameColumn('3_17', 'q3_17');
                $table->renameColumn('3_18', 'q3_18');
                $table->renameColumn('3_19', 'q3_19');
                $table->renameColumn('3_20', 'q3_20');
                $table->renameColumn('4_1', 'q4_1');
                $table->renameColumn('4_2', 'q4_2');
                $table->renameColumn('4_3', 'q4_3');
                $table->renameColumn('4_4', 'q4_4');
                $table->renameColumn('4_5', 'q4_5');
                $table->renameColumn('4_6', 'q4_6');
                $table->renameColumn('4_7', 'q4_7');
                $table->renameColumn('4_8', 'q4_8');
                $table->renameColumn('4_9', 'q4_9');
                $table->renameColumn('4_10', 'q4_10');
                $table->renameColumn('5_1', 'q5_1');
                $table->renameColumn('5_2', 'q5_2');
                $table->renameColumn('5_3', 'q5_3');
                $table->renameColumn('5_4', 'q5_4');
                $table->renameColumn('5_5', 'q5_5');
                $table->renameColumn('5_6', 'q5_6');
                $table->renameColumn('5_7', 'q5_7');
                $table->renameColumn('5_8', 'q5_8');
                $table->renameColumn('5_9', 'q5_9');
                $table->renameColumn('5_10', 'q5_10');
                $table->renameColumn('6_1', 'q6_1');
                $table->renameColumn('6_2', 'q6_2');
                $table->renameColumn('6_3', 'q6_3');
                $table->renameColumn('6_4', 'q6_4');
                $table->renameColumn('6_5', 'q6_5');
                $table->renameColumn('6_6', 'q6_6');
                $table->renameColumn('6_7', 'q6_7');
                $table->renameColumn('6_8', 'q6_8');
                $table->renameColumn('6_9', 'q6_9');
                $table->renameColumn('6_10', 'q6_10');
                $table->renameColumn('7_1', 'q7_1');
                $table->renameColumn('7_2', 'q7_2');
                $table->renameColumn('7_3', 'q7_3');
                $table->renameColumn('7_4', 'q7_4');
                $table->renameColumn('7_5', 'q7_5');
                $table->renameColumn('7_6', 'q7_6');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('placements', function ($table) {
            $table->renameColumn('lastname', 'Nom');
            $table->renameColumn('firstname', 'Prenom');
            $table->renameColumn('email', 'AdresseElectronique');
            $table->renameColumn('years', 'Grammaire');
            if (Schema::hasColumn('placements', 'q1_1')) {
                $table->renameColumn('q1_1', '1_1');
                $table->renameColumn('q1_2', '1_2');
                $table->renameColumn('q1_3', '1_3');
                $table->renameColumn('q1_4', '1_4');
                $table->renameColumn('q1_5', '1_5');
                $table->renameColumn('q1_6', '1_6');
                $table->renameColumn('q1_7', '1_7');
                $table->renameColumn('q1_8', '1_8');
                $table->renameColumn('q1_9', '1_9');
                $table->renameColumn('q1_10', '1_10');
                $table->renameColumn('q1_11', '1_11');
                $table->renameColumn('q1_12', '1_12');
                $table->renameColumn('q1_13', '1_13');
                $table->renameColumn('q1_14', '1_14');
                $table->renameColumn('q1_15', '1_15');
                $table->renameColumn('q1_16', '1_16');
                $table->renameColumn('q1_17', '1_17');
                $table->renameColumn('q1_18', '1_18');
                $table->renameColumn('q1_19', '1_19');
                $table->renameColumn('q1_20', '1_20');
                $table->renameColumn('q1_21', '1_21');
                $table->renameColumn('q1_22', '1_22');
                $table->renameColumn('q2_1', '2_1');
                $table->renameColumn('q2_2', '2_2');
                $table->renameColumn('q2_3', '2_3');
                $table->renameColumn('q2_4', '2_4');
                $table->renameColumn('q2_5', '2_5');
                $table->renameColumn('q2_6', '2_6');
                $table->renameColumn('q3_1', '3_1');
                $table->renameColumn('q3_2', '3_2');
                $table->renameColumn('q3_3', '3_3');
                $table->renameColumn('q3_4', '3_4');
                $table->renameColumn('q3_5', '3_5');
                $table->renameColumn('q3_6', '3_6');
                $table->renameColumn('q3_7', '3_7');
                $table->renameColumn('q3_8', '3_8');
                $table->renameColumn('q3_9', '3_9');
                $table->renameColumn('q3_10', '3_10');
                $table->renameColumn('q3_11', '3_11');
                $table->renameColumn('q3_12', '3_12');
                $table->renameColumn('q3_13', '3_13');
                $table->renameColumn('q3_14', '3_14');
                $table->renameColumn('q3_15', '3_15');
                $table->renameColumn('q3_16', '3_16');
                $table->renameColumn('q3_17', '3_17');
                $table->renameColumn('q3_18', '3_18');
                $table->renameColumn('q3_19', '3_19');
                $table->renameColumn('q3_20', '3_20');
                $table->renameColumn('q4_1', '4_1');
                $table->renameColumn('q4_2', '4_2');
                $table->renameColumn('q4_3', '4_3');
                $table->renameColumn('q4_4', '4_4');
                $table->renameColumn('q4_5', '4_5');
                $table->renameColumn('q4_6', '4_6');
                $table->renameColumn('q4_7', '4_7');
                $table->renameColumn('q4_8', '4_8');
                $table->renameColumn('q4_9', '4_9');
                $table->renameColumn('q4_10', '4_10');
                $table->renameColumn('q5_1', '5_1');
                $table->renameColumn('q5_2', '5_2');
                $table->renameColumn('q5_3', '5_3');
                $table->renameColumn('q5_4', '5_4');
                $table->renameColumn('q5_5', '5_5');
                $table->renameColumn('q5_6', '5_6');
                $table->renameColumn('q5_7', '5_7');
                $table->renameColumn('q5_8', '5_8');
                $table->renameColumn('q5_9', '5_9');
                $table->renameColumn('q5_10', '5_10');
                $table->renameColumn('q6_1', '6_1');
                $table->renameColumn('q6_2', '6_2');
                $table->renameColumn('q6_3', '6_3');
                $table->renameColumn('q6_4', '6_4');
                $table->renameColumn('q6_5', '6_5');
                $table->renameColumn('q6_6', '6_6');
                $table->renameColumn('q6_7', '6_7');
                $table->renameColumn('q6_8', '6_8');
                $table->renameColumn('q6_9', '6_9');
                $table->renameColumn('q6_10', '6_10');
                $table->renameColumn('q7_1', '7_1');
                $table->renameColumn('q7_2', '7_2');
                $table->renameColumn('q7_3', '7_3');
                $table->renameColumn('q7_4', '7_4');
                $table->renameColumn('q7_5', '7_5');
                $table->renameColumn('q7_6', '7_6');
            }
        });
    }
}
