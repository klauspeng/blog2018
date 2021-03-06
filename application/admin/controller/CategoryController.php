<?php
/**
 * Project :blog2018
 * User: Klaus
 * Date: 2018.03.17 23:48
 */
namespace app\admin\controller;

use app\common\model\Category;

class CategoryController extends Base
{
    /**
     * 分类首页-列表页
     */
    public function index()
    {
        $category = new Category();
        $categoryList = $category->order(['cate_id' => 'desc'])->page(1)->select();
        // todo 分页
        // todo 搜索
        return $this->assign('categoryLis', $categoryList)->fetch();

    }

    /**
     * 增加分类
     */
    public function add()
    {

    }

    /**
     * 编辑分类
     */
    public function edit()
    {

    }

    /**
     * 删除分类
     */
    public function delete()
    {

    }
}