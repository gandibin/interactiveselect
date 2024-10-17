<?php
namespace app\index\controller;

use think\Db;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        $minipcData = Db::table('minipc')->paginate(20);
        $paginationLinks = $minipcData->render();

        // 将分页对象传递到视图
        $this->assign('minipcData', $minipcData);
        $this->assign('paginationLinks', $paginationLinks);

        // 渲染视图
        return $this->fetch();
    }
}
