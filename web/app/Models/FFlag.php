<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FFlag extends Model
{
	/**
	 * The database connection that should be used by the migration.
	 *
	 * @var string
	 */
	protected $connection = 'mysql-fflag';
	
	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fflags';
	
    use HasFactory;
}
