<?php

namespace Grafxflow\PhpConsole\Models;

use Model;

/**
 * Script Model
 */
class Script extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'grafxflow_phpconsole_scripts';

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

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

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];
}
