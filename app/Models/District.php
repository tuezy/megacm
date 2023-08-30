<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class District
 * 
 * @property int $id
 * @property int|null $id_city
 * @property string|null $name
 * @property string|null $slug
 * @property string|null $code
 * @property string|null $level
 * @property int|null $numb
 * @property string|null $status
 * @property int|null $date_created
 * @property int|null $date_updated
 *
 * @package App\Models
 */
class District extends Model
{
	protected $table = 'table_district';
	public $timestamps = false;

	protected $casts = [
		'id_city' => 'int',
		'numb' => 'int',
		'date_created' => 'int',
		'date_updated' => 'int'
	];

	protected $fillable = [
		'id_city',
		'name',
		'slug',
		'code',
		'level',
		'numb',
		'status',
		'date_created',
		'date_updated'
	];
}
