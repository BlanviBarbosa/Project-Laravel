<?php

namespace ProjectLaravel\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Project.
 *
 * @package namespace ProjectLaravel\Entities;
 */

class Project extends Model implements Transformable {
	use TransformableTrait;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'owner_id',
		'client_id',
		'name',
		'description',
		'progress',
		'status',
		'due_date'
	];

}