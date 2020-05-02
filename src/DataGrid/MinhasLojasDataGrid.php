<?php
namespace LuanCS\MinhasLojas\DataGrid;

use Webkul\Ui\DataGrid\DataGrid;
use DB;

class MinhasLojasDataGrid extends DataGrid
{
    protected $index = 'id';

    protected $sortOrder = 'desc';

    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('lojas')
            ->select('id','nome', 'endereco');

        $this->setQueryBuilder($queryBuilder);
    }

    public function addColumns()
    {
        $this->addColumn([
            'index' => 'id',
            'label' => 'ID',
            'type' => 'number',
            'searchable' => false,
            'sortable' => true,
            'filterable' => true
        ]);

        $this->addColumn([
            'index' => 'nome',
            'label' => 'Nome da Loja',
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true
        ]);

        $this->addColumn([
            'index' => 'endereco',
            'label' => 'Endereço da Loja',
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true
        ]);
    }

    public function prepareActions()
    {
        $this->addAction([
            'type' => 'Edit',
            'method' => 'GET',
            'route' => 'minhaslojas.admin.edit',
            'icon' => 'icon pencil-lg-icon'
        ]);

        $this->addAction([
            'type' => 'Delete',
            'method' => 'GET',
            'route' => 'minhaslojas.admin.destroy',
            'icon' => 'icon trash-icon'
        ]);
    }
}