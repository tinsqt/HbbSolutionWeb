<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 06 Sep 2017 06:46:48 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Approach
 * 
 * @property int $id
 * @property string $title
 * @property string $title_vi
 * @property string $short_content
 * @property string $short_content_vi
 * @property string $content
 * @property string $content_vi
 * @property int $sort_order
 * @property int $status
 *
 * @package App\Models
 */
class Approach extends Eloquent
{
	protected $table = 'approach';
	public $timestamps = false;

	protected $casts = [
		'sort_order' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'title',
		'title_vi',
		'short_content',
		'short_content_vi',
		'content',
		'content_vi',
		'sort_order',
		'status'
	];
}
