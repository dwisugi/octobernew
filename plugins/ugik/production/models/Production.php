<?php namespace Ugik\Production\Models;

use Model;

/**
 * Model
 */
class Production extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'ugik_production_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
