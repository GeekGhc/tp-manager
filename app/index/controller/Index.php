<?php
namespace app\index\controller;

use think\Request;
class Index
{
    public function index()
    {
        dump(config());
    }
}
