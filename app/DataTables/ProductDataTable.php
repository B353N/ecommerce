<?php

namespace App\DataTables;

use App\Models\Product;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ProductDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
        ->addColumn('action', function ($query){
            $editBtn = "<a href='".route('admin.product.edit', $query->id)."' class='btn btn-primary'><i class='far fa-edit'></i> Edit</a>";
            $deleteBtn = "<a href='".route('admin.product.destroy', $query->id)."' class='btn btn-danger ml-2 delete-item'><i class='far fa-trash'></i> Delete</a>";
            $moreBtn = '                    <div class="dropdown d-inline">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-cog"></i>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item has-icon" href="'.route('admin.product-image-gallery.index', ['product' => $query->id]).'"><i class="far fa-heart"></i> Image Galery</a>
              <a class="dropdown-item has-icon" href="#"><i class="far fa-file"></i> Another action</a>
              <a class="dropdown-item has-icon" href="#"><i class="far fa-clock"></i> Something else here</a>
            </div>
          </div>';
            return $editBtn.$deleteBtn.$moreBtn;
         })
         ->addColumn('status', function($query){
            if($query->status == 1){
            $button = '<label class="custom-switch mt-2">
                        <input type="checkbox" checked name="custom-switch-checkbox" data-id="'.$query->id.'" class="custom-switch-input change-status">
                        <span class="custom-switch-indicator"></span>
                    </label>';
                }else{
                    $button = '<label class="custom-switch mt-2">
                        <input type="checkbox" name="custom-switch-checkbox" data-id="'.$query->id.'" class="custom-switch-input change-status">
                        <span class="custom-switch-indicator"></span>
                    </label>';
                }
            return $button;
         })
         ->addColumn('thumb_image', function ($query){
            return $img = "<img width='100px' src='".asset($query->thumb_image)."' />";
         })
         ->rawColumns(['action', 'thumb_image','status'])
         ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Product $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('product-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('thumb_image'),
            Column::make('name'),
            Column::make('qty'),
            Column::make('price'),
            Column::make('offer_price'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(250)
                  ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Product_' . date('YmdHis');
    }
}