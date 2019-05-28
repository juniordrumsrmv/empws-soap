<?php namespace Emporium;

/**
 * Eloquent class to describe the label_promotion_store table
 *
 * automatically generated by ModelGenerator.php
 */
class LabelPromotionStore extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'label_promotion_store';

    public $primaryKey = 'store_key';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('label_printing_date');
    }

    protected $fillable = array('label_quantity', 'label_printing_date');


}