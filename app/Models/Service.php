<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 06 Sep 2017 06:46:49 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Service
 * 
 * @property int $id
 * @property string $title
 * @property string $title_vi
 * @property string $abbreviate
 * @property string $image
 * @property string $short_content
 * @property string $short_content_vi
 * @property int $status
 *
 * @package App\Models
 */
class Service extends Eloquent
{
	protected $table = 'service';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'title',
		'title_vi',
		'abbreviate',
		'image',
		'short_content',
		'short_content_vi',
		'status'
	];
}
