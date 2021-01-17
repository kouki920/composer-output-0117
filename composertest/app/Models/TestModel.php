<?php
namespace App\Models;
//名前空間はフォルダの構成と同じようにする

class TestModel //class名はファイルと同じにする(1ファイル1クラス)
{
    private $text = 'hello world';

    public function getHello(){
        return $this->text;
    }
}
?>
