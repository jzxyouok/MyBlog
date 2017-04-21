<?php
namespace app\index\controller;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        $rows = db("user")->select();
        $this->assign("data",$rows);
        $this->display();
        return $this->fetch();
    }
}
