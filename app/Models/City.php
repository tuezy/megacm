<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class City
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $slug
 * @property string|null $level
 * @property string|null $code
 * @property int|null $numb
 * @property string|null $status
 * @property int|null $date_created
 * @property int|null $date_updated
 *
 * @package App\Models
 */
class City extends Model
{
	protected $table = 'table_city';
	public $timestamps = false;

	protected $casts = [
		'numb' => 'int',
		'date_created' => 'int',
		'date_updated' => 'int'
	];

	protected $fillable = [
		'name',
		'slug',
		'level',
		'code',
		'numb',
		'status',
		'date_created',
		'date_updated'
	];
}
