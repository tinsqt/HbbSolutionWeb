<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 06 Sep 2017 06:46:49 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ServiceDetail
 * 
 * @property int $id
 * @property string $title_detail
 * @property string $title_detail_vi
 * @property string $image_detail
 * @property string $content
 * @property string $content_vi
 * @property int $id_service
 * @property int $status
 *
 * @package App\Models
 */
class ServiceDetail extends Eloquent
{
	protected $table = 'service_detail';
	public $timestamps = false;

	protected $casts = [
		'id_service' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'title_detail',
		'title_detail_vi',
		'image_detail',
		'content',
		'content_vi',
		'id_service',
		'status'
	];
}
