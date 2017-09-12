<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 06 Sep 2017 06:46:48 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AboutUs
 * 
 * @property int $id
 * @property string $why_title
 * @property string $why_title_vi
 * @property string $why_content
 * @property string $why_content_vi
 * @property string $left_title
 * @property string $left_title_vi
 * @property string $left_content
 * @property string $left_content_vi
 * @property string $right_title
 * @property string $right_title_vi
 * @property string $right_content
 * @property string $right_content_vi
 * @property string $url_youtube
 * @property string $thumb
 * @property string $link
 * @property int $status
 *
 * @package App\Models
 */
class AboutUs extends Eloquent
{
	protected $table = 'about_us';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'why_title',
		'why_title_vi',
		'why_content',
		'why_content_vi',
		'left_title',
		'left_title_vi',
		'left_content',
		'left_content_vi',
		'right_title',
		'right_title_vi',
		'right_content',
		'right_content_vi',
		'url_youtube',
		'thumb',
		'link',
		'status'
	];
}
