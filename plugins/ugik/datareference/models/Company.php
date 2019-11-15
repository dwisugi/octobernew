<?php namespace Ugik\DataReference\Models;

use Model;

/**
 * Model
 */
class Company extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'ugik_datareference_company';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
