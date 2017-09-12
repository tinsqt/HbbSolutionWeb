<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 06 Sep 2017 06:46:49 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Recument
 * 
 * @property int $id
 * @property string $title
 * @property string $title_vi
 * @property int $id_recument_type
 * @property string $content
 * @property string $content_vi
 * @property int $status
 *
 * @package App\Models
 */
class Recument extends Eloquent
{
	protected $table = 'recument';
	public $timestamps = false;

	protected $casts = [
		'id_recument_type' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'title',
		'title_vi',
		'id_recument_type',
		'content',
		'content_vi',
		'status'
	];
}
