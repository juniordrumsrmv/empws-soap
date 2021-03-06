<?php namespace Emporium;

/**
 * Eloquent class to describe the pump table
 *
 * automatically generated by ModelGenerator.php
 */
class Pump extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'pump';

    public $primaryKey = 'pump_number';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('pump_date_seal', 'pump_date_inc', 'pump_date_alt');
    }

    protected $fillable = array('pump_name', 'pump_serial', 'pump_manufacturer', 'pump_model', 'pump_id_meter',
        'pump_num_seal', 'pump_date_seal', 'pump_date_inc', 'pump_date_alt');


}
