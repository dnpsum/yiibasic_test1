<?php

    namespace app\controllers;

    class AnamaiController extends \yii\web\Controller {
        
        public function actionTest()
        {
            $a = 3; $b = 5;
            $c = $a*$b;
            
            return $this->render('test',['res'=>$c]);
        }
    }

