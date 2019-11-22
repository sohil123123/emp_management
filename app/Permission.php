<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends \Spatie\Permission\Models\Permission
{
    public static function defaultPermissions()
	{
	    return [
	        'admin' => [
				'view_admins',
				'add_admins',
				'edit_admins',
				'delete_admins',

				'view_backend-roles',
				'add_backend-roles',
				'edit_backend-roles',
				'delete_backend-roles',

				'view_frontend-roles',
				'add_frontend-roles',
				'edit_frontend-roles',
				'delete_frontend-roles',

				'view_backend-permissions',
				'add_backend-permissions',
				'edit_backend-permissions',
				'delete_backend-permissions',

				'view_frontend-permissions',
				'add_frontend-permissions',
				'edit_frontend-permissions',
				'delete_frontend-permissions',

				'view_users',
				'add_users',
				'edit_users',
				'delete_users',
				
			],
			'web' => [
				'view_companies',
				'add_companies',
				'edit_companies',
				'delete_companies',

				'view_departments',
				'add_departments',
				'edit_departments',
				'delete_departments',

				'view_job-titles',
				'add_job-titles',
				'edit_job-titles',
				'delete_job-titles',

				'view_leave-groups',
				'add_leave-groups',
				'edit_leave-groups',
				'delete_leave-groups',

				'view_leave-types',
				'add_leave-types',
				'edit_leave-types',
				'delete_leave-types',

				'view_attendances',
				'add_attendances',
				'edit_attendances',
				'delete_attendances',

				'view_tasks',
				'add_tasks',
				'edit_tasks',
				'delete_tasks',

				'view_users',
				'add_users',
				'edit_users',
				'delete_users',
			]

	    ];
	}
}
