<?php

namespace App\Controllers;

use App\Models\TestModel;
//useで名前空間で指定、TestModel(class)を読み込む

class TestController{
    public function run(){
        $model = new TestModel;
        //useでModelsのTestModelをインポートしているのでインスタンス化が可能
        echo $model->getHello();
        //ModelsのTestModel(class)から呼び出している
    }
}
