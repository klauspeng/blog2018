<?php
namespace app\index\controller;

class Index extends \think\Controller
{
    public function index()
    {
        return $this->fetch('index');
    }

    public function md()
    {
        $markdown = new \Parsedown();
        $content = file_get_contents('https://raw.githubusercontent.com/klauspeng/notes/master/php/php.md');
        $html = $markdown->parse($content);

        return $this->display($html);
    }
}
