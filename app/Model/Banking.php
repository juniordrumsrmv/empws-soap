<?php namespace Emporium;

/**
 * Eloquent class to describe the banking table
 *
 * automatically generated by ModelGenerator.php
 */
class Banking extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'banking';

    public $primaryKey = 'start_time';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('fiscal_date', 'received_time', 'last_change_time');
    }

    protected $fillable = array('transaction_type', 'cashier_key', 'authorizer_key', 'status', 'location', 'context',
        'transaction_number', 'ecf_number', 'fiscal_date', 'received_time', 'last_change_time');


}