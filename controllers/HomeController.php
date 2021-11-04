<?php
/**
 * Created by PhpStorm.
 * User: xianqiu
 * Date: 4/11/21
 * Time: 7:21 AM
 */

namespace app\controllers;

use \yii\base\Controller;


class HomeController extends Controller
{
    public function actionIndex()
    {
        $data = [
            'name' => 'ian',
            'age' => 30
        ];

        print_arr($data);


    }

}