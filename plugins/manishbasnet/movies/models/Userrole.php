<?php namespace ManishBasnet\Movies\Models;

use Model;

/**
 * Model
 */
class Userrole extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'manishbasnet_movies_userrole';

    public $hasMany = [

        'user' => 'ManishBasnet\Movies\Models\User'
    ];
}
