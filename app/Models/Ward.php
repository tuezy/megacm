<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ward
 * 
 * @property int $id
 * @property int|null $id_city
 * @property int|null $id_district
 * @property string|null $name
 * @property string|null $slug
 * @property string|null $code
 * @property string|null $level
 * @property int|null $numb
 * @property string|null $status
 * @property int|null $date_updated
 * @property int|null $date_created
 * @property float|null $ship_price
 *
 * @package App\Models
 */
class Ward extends Model
{
	protected $table = 'table_ward';
	public $timestamps = false;

	protected $casts = [
		'id_city' => 'int',
		'id_district' => 'int',
		'numb' => 'int',
		'date_updated' => 'int',
		'date_created' => 'int',
		'ship_price' => 'float'
	];

	protected $fillable = [
		'id_city',
		'id_district',
		'name',
		'slug',
		'code',
		'level',
		'numb',
		'status',
		'date_updated',
		'date_created',
		'ship_price'
	];
}
