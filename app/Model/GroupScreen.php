<?php namespace Emporium;

/**
 * Eloquent class to describe the group_screen table
 *
 * automatically generated by ModelGenerator.php
 */
class GroupScreen extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'group_screen';

    public $primaryKey = 'group_type';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('group_screen_name', 'group_mode', 'total_rows', 'total_cols', 'space_rows',
        'space_cols', 'screen_rows', 'screen_cols', 'color_back', 'color_text');


}
