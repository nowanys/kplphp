<?php
/*----------------------------------------------------------------
 * 版权所有 2019~2020 极盾工作室  kplphp地址[ http://www.kplphp.com ]
 * 作者由JefferyCai码云所创造 [ https://gitee.com/JefferyCai ]
 * 当前码云地址 与 操作文档都在 [ https://gitee.com/JefferyCai/kplphp ]
 * QQ群请加 972703635 [ https://jq.qq.com/?_wv=1027&k=5YnmIH8 ]，如有更多服务，请单独加群主: 1345199080
 * 首页功能
----------------------------------------------------------------*/
namespace app\admin\controller;
use app\AdminController;
use app\common\model\Csvceshi;
use think\facade\View;
class Admin extends AdminController
{
    public function index()
    {
        View::assign('name','ThinkPHP');
        View::assign('email','thinkphp@qq.com');
        View::assign([
            'name'  => 'ThinkPHP',
            'email' => 'thinkphp@qq.com'
        ]);
        return View::fetch();
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }

    public function addonss()
    {
        echo $this->app->addons->getAddonsPath();
    }

    # 自增
    public function add()
    {

        halt(123);
    }
}