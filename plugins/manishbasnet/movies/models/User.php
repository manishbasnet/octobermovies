<?php namespace ManishBasnet\Movies\Models;

use Model;

/**
 * Model
 */
class User extends Model
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
    public $table = 'manishbasnet_movies_user';

    public $hasOne = [

        'userinfo' => 'ManishBasnet\Movies\Models\Userinfo'
    ];  


    public $belongsTo = [

        'userrole' => 'ManishBasnet\Movies\Models\Userrole'
    ];
}
