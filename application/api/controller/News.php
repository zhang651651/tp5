<?php
/**
 * Created by PhpStorm.
 * User: zhangxinrong
 * Date: 2019/1/16
 * Time: 7:18 PM
 */
namespace app\api\controller;
use app\api\common\Base;


class News extends Base
{
    public function _initialize()
    {
        parent::_initialize();
    }

    public  function  fetchNewslist()
    {

        $list = model('News')->fetchall();
        return $this->successReturn($list);

    }
}