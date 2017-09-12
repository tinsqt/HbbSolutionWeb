<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 06 Sep 2017 06:46:48 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class FeaturedProject
 * 
 * @property int $id
 * @property string $image
 * @property int $priority
 * @property int $status
 *
 * @package App\Models
 */
class FeaturedProject extends Eloquent
{
	protected $table = 'featured_project';
	public $timestamps = false;

	protected $casts = [
		'priority' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'image',
		'priority',
		'status'
	];
}
