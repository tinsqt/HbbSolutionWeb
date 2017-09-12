<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 06 Sep 2017 06:46:49 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Location
 * 
 * @property int $id
 * @property string $image
 * @property string $link
 * @property int $status
 *
 * @package App\Models
 */
class Location extends Eloquent
{
	protected $table = 'location';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'image',
		'link',
		'status'
	];
}
