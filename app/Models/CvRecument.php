<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 06 Sep 2017 06:46:48 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CvRecument
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $city
 * @property string $state
 * @property string $country
 * @property string $interested_in
 * @property string $linkedin_profile
 * @property string $url_portfolio
 * @property string $cover_letter
 * @property string $resume
 * @property string $other_file
 * @property int $status
 *
 * @package App\Models
 */
class CvRecument extends Eloquent
{
	protected $table = 'cv_recument';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'name',
		'email',
		'phone',
		'city',
		'state',
		'country',
		'interested_in',
		'linkedin_profile',
		'url_portfolio',
		'cover_letter',
		'resume',
		'other_file',
		'status'
	];
}
