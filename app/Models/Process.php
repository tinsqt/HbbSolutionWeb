<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 06 Sep 2017 06:46:49 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Process
 * 
 * @property int $id
 * @property string $title_process
 * @property string $title_process_vi
 * @property string $content_process
 * @property string $content_process_vi
 * @property int $sort_order
 * @property string $image_icon
 * @property string $image_process
 * @property int $id_service
 * @property int $status
 *
 * @package App\Models
 */
class Process extends Eloquent
{
	protected $table = 'process';
	public $timestamps = false;

	protected $casts = [
		'sort_order' => 'int',
		'id_service' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'title_process',
		'title_process_vi',
		'content_process',
		'content_process_vi',
		'sort_order',
		'image_icon',
		'image_process',
		'id_service',
		'status'
	];
}
