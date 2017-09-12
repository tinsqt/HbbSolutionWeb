<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 06 Sep 2017 06:46:48 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class HbbInfo
 * 
 * @property int $id
 * @property string $email
 * @property string $address
 * @property string $phone
 * @property int $status
 *
 * @package App\Models
 */
class HbbInfo extends Eloquent
{
	protected $table = 'hbb_info';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'email',
		'address',
		'phone',
		'status'
	];
}
