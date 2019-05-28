<?php namespace Emporium;

/**
 * Eloquent class to describe the tare table
 *
 * automatically generated by ModelGenerator.php
 */
class Tare extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'tare';

    public $primaryKey = 'tare_key';

    public $timestamps = false;

    protected $fillable = array('tare_id', 'name', 'decimals', 'tare_value');


}