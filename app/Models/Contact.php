<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 06 Sep 2017 06:46:48 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Contact
 * 
 * @property int $id
 * @property string $fullname
 * @property string $email
 * @property string $phone
 * @property string $company_name
 * @property string $message
 * @property int $status
 *
 * @package App\Models
 */
class Contact extends Eloquent
{
	protected $table = 'contact';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'fullname',
		'email',
		'phone',
		'company_name',
		'message',
		'status'
	];
}
