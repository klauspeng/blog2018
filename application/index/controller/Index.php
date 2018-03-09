<?php
namespace app\index\controller;

class Index extends \think\Controller
{
    /**
     * 首页
     * @return mixed
     */
    public function index()
    {
        return $this->fetch('index');
    }

}
