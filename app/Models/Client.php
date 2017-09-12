<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 06 Sep 2017 06:46:48 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Client
 * 
 * @property int $id
 * @property string $image
 * @property string $link
 * @property int $status
 *
 * @package App\Models
 */
class Client extends Eloquent
{
	protected $table = 'client';
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
