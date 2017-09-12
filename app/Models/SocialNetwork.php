<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 06 Sep 2017 06:46:49 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class SocialNetwork
 * 
 * @property int $id
 * @property string $name
 * @property string $link
 * @property int $status
 *
 * @package App\Models
 */
class SocialNetwork extends Eloquent
{
	protected $table = 'social_network';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'name',
		'link',
		'status'
	];
}
