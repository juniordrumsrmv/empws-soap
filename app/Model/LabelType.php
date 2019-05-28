<?php namespace Emporium;

/**
 * Eloquent class to describe the label_type table
 *
 * automatically generated by ModelGenerator.php
 */
class LabelType extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'label_type';

    public $primaryKey = 'label_key';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('name');


}