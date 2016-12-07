<?php

namespace App\Admin\Controllers;

use App\Voucher;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class VoucherController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('优惠码');
            $content->description('显示生成的优惠码，可以下载打印');
            $content->body($this->grid());
        });
    }




    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Voucher::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->column('code');
            $grid->is_used('是否使用?')->value(function ($is_used) {
                return $is_used ? '是' : '否';
            });

          /*  $grid->created_at();
            $grid->updated_at();*/
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Voucher::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
