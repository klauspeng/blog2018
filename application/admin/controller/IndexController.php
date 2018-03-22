<?php
namespace app\admin\controller;

class IndexController extends Base
{
    public function index()
    {
        // return 'admin模块';
        return $this->fetch();
    }
}
