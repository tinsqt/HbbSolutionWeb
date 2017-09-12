<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 06 Sep 2017 06:46:49 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 * 
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $fullname
 * @property string $role
 * @property string $email
 * @property string $address
 * @property string $phone
 * @property int $status
 *
 * @package App\Models
 */
class User extends Eloquent
{
	protected $table = 'user';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'username',
		'password',
		'fullname',
		'role',
		'email',
		'address',
		'phone',
		'status'
	];
}
