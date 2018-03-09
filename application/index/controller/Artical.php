<?php
/**
 * Project :blog2018
 * User: Klaus
 * Date: 2018.03.10 0:06
 */
namespace app\index\controller;

use think\Cache;

class Artical extends \think\Controller
{
    /**
     * 文章首页
     * @return mixed
     */
    public function index()
    {
        // 尝试从缓存获取
        $content = Cache::get('content_1');
        if (!$content) {
            $content = file_get_contents('https://raw.githubusercontent.com/klauspeng/notes/master/php/php.md');
            Cache::set('content_1', $content, 3600);
        };

        // 解析文章
        $markdown = new \Parsedown();
        $html = $markdown->parse($content);

        return $this->display($html);
    }
}