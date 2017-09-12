<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 06 Sep 2017 06:46:49 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Project
 * 
 * @property int $id
 * @property string $title
 * @property string $image
 * @property string $is_web
 * @property string $is_mobile
 * @property string $content
 * @property string $content_vi
 * @property int $status
 *
 * @package App\Models
 */
class Project extends Eloquent
{
	protected $table = 'project';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'title',
		'image',
		'is_web',
		'is_mobile',
		'content',
		'content_vi',
		'status'
	];
}
