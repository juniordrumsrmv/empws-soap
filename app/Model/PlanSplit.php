<?php namespace Emporium;

/**
 * Eloquent class to describe the plan_split table
 *
 * automatically generated by ModelGenerator.php
 */
class PlanSplit extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'plan_split';

    public $primaryKey = 'plan_split_splits';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('last_change_time');
    }

    protected $fillable = array('plan_split_name', 'plan_split_rate', 'plan_split_method',
        'plan_split_min_split_amount', 'plan_split_status', 'last_change_time', 'plan_split_code_key', 'plan_split_type_key');


}
