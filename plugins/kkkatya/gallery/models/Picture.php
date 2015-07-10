<?php namespace Kkkatya\Gallery\Models;

use Model;

/**
 * Picture Model
 */
class Picture extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'kkkatya_gallery_pictures';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}