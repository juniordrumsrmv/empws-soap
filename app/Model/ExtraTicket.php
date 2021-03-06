<?php namespace Emporium;

/**
 * Eloquent class to describe the extra_ticket table
 *
 * automatically generated by ModelGenerator.php
 */
class ExtraTicket extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'extra_ticket';

    public $primaryKey = 'trn_number';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('fiscal_date');
    }

    protected $fillable = array('ticket_type', 'ecf_number', 'fiscal_date', 'data');


}
