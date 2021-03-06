<?php namespace Emporium;

/**
 * Eloquent class to describe the accum_returned_item_reason table
 *
 * automatically generated by ModelGenerator.php
 */
class AccumReturnedItemReason extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'accum_returned_item_reason';

    public $primaryKey = 'transaction';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('desc_plu', 'quantity', 'amount', 'department_key', 'maker_key');


}
