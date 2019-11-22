<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeavegroupHasLeavetypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leavegroup_has_leavetypes', function (Blueprint $table) {
            $table->unsignedBigInteger('leave_type_id');
            $table->unsignedBigInteger('leave_group_id');

            $table->foreign('leave_type_id')
                ->references('id')
                ->on('leave_types')
                ->onDelete('cascade');

            $table->foreign('leave_group_id')
                ->references('id')
                ->on('leave_groups')
                ->onDelete('cascade');

            $table->primary(['leave_type_id', 'leave_group_id'], 'leavegroup_has_leavetypes_leave_type_id_leave_group_id_primary');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leavegroup_has_leavetypes');
    }
}
