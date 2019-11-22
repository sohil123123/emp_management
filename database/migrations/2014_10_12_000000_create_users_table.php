<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('employeeid')->unique()->nullable();
            $table->string('firstname');
            $table->string('lastname');
            $table->enum('gender', ['male', 'female'])->default('male');
            $table->enum('civil_status', ['single', 'married', 'anulled', 'widowed', 'legally_seprated'])->default('single')->nullable();
            $table->float('height', 8, 2)->nullable();
            $table->float('weight', 8, 2)->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('mobileno')->nullable();
            $table->integer('age')->nullable()->default(0);
            $table->date('dob')->nullable();
            $table->string('nationalid')->nullable();
            $table->string('birth_place')->nullable();
            $table->text('home_address')->nullable();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->string('profile_image')->nullable();
            $table->unsignedBigInteger('company_id')->nullable();
            $table->unsignedBigInteger('department_id')->nullable();
            $table->unsignedBigInteger('job_title_id')->nullable();
            $table->string('company_email')->unique()->nullable();
            $table->unsignedBigInteger('leave_group_id')->nullable();
            $table->enum('employment_type', ['regular', 'trainee'])->default('regular');
            $table->enum('employment_status', [0, 1])->default(0);
            $table->date('start_date')->nullable();
            $table->date('date_regularized')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->foreign('job_title_id')->references('id')->on('job_titles')->onDelete('cascade');
            $table->foreign('leave_group_id')->references('id')->on('leave_groups')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
