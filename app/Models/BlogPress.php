<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 06 Sep 2017 06:46:48 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class BlogPress
 * 
 * @property int $id
 * @property string $title_blog
 * @property string $title_blog_vi
 * @property string $image
 * @property string $content
 * @property string $content_vi
 * @property int $id_service
 * @property \Carbon\Carbon $date
 * @property string $id_user
 * @property int $type
 * @property int $status
 *
 * @package App\Models
 */
class BlogPress extends Eloquent
{
	protected $table = 'blog_press';
	public $timestamps = false;

	protected $casts = [
		'id_service' => 'int',
		'type' => 'int',
		'status' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'title_blog',
		'title_blog_vi',
		'image',
		'content',
		'content_vi',
		'id_service',
		'date',
		'id_user',
		'type',
		'status'
	];
}
