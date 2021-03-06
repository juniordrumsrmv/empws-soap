<?php namespace Emporium;

/**
 * Eloquent class to describe the sale_promotion_item table
 *
 * automatically generated by ModelGenerator.php
 */
class SalePromotionItem extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'sale_promotion_item';

    public $primaryKey = 'plu_id';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('short_description', 'quantity', 'quantity_min', 'quantity_max', 'discount', 'price',
        'amount_price', 'unit_price_promo', 'amount_price_promo');


}
