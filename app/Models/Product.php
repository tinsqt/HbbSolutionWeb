<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 06 Sep 2017 06:46:49 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Product
 * 
 * @property int $id
 * @property string $title
 * @property string $image_before
 * @property string $image_after
 * @property int $is_show
 * @property int $status
 *
 * @package App\Models
 */
class Product extends Eloquent
{
	protected $table = 'product';
	public $timestamps = false;

	protected $casts = [
		'is_show' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'title',
		'image_before',
		'image_after',
		'is_show',
		'status'
	];
}
