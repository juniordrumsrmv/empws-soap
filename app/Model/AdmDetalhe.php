<?php namespace Emporium;

/**
 * Eloquent class to describe the adm_detalhe table
 *
 * automatically generated by ModelGenerator.php
 */
class AdmDetalhe extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'adm_detalhe';

    public $primaryKey = 'sku_id';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('start_time', 'fiscal_date');
    }

    protected $fillable = array('pos_number', 'ticket_number', 'start_time', 'fiscal_date', 'qty_autorizada',
        'qty_estornada', 'unidade_apresentacao', 'valor_total', 'valor_ms', 'valor_paciente', 'valor_estorno', 'cod_indicador',
        'cod_indicador_estorno');


}