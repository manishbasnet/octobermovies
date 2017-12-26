<?php namespace ManishBasnet\Movies\Models;

use Model;

/**
 * Model
 */
class Movie extends Model
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
    public $table = 'manishbasnet_movies_';

    protected $jsonable = ['actors'];




    // Relations


    public $belongsToMany = [

        'genres' =>[

            'ManishBasnet\Movies\Models\Genre',
            'table' => 'manishbasnet_movies_movies_genres',
            'order' => 'genre_title'
        ]
    ];





    public $attachOne = [

        'poster' => 'System\models\File'
    ];


    public $attachMany = [

        'movie_gallery' => 'System\Models\File'
    ];


    // protected $fillable = array('name','lastname');



    }
