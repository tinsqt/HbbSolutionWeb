<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 06 Sep 2017 06:46:49 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class RecumentType
 * 
 * @property int $id
 * @property string $name
 * @property int $is_show
 * @property int $status
 *
 * @package App\Models
 */
class RecumentType extends Eloquent
{
	protected $table = 'recument_type';
	public $timestamps = false;

	protected $casts = [
		'is_show' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'name',
		'is_show',
		'status'
	];
}
