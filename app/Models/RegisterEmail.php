<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 06 Sep 2017 06:46:49 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class RegisterEmail
 * 
 * @property int $id
 * @property string $email
 * @property int $status
 *
 * @package App\Models
 */
class RegisterEmail extends Eloquent
{
	protected $table = 'register_email';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'email',
		'status'
	];
}
