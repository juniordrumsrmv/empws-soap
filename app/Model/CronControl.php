<?php namespace Emporium;

/**
 * Eloquent class to describe the cron_control table
 *
 * automatically generated by ModelGenerator.php
 */
class CronControl extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'cron_control';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('cronctl_reference_time', 'cronctl_start_time', 'cronctl_end_time');
    }

    protected $fillable = array('entity_key', 'cronctl_reference_time', 'cronctl_start_time', 'cronctl_end_time',
        'cronctl_output');


}