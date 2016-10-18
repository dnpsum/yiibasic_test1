<?php
    
    namespace app\controllers;

    class HelloController extends \yii\web\Controller {
        
        public function actionFirst()
        {
            $title = 'Hello Controller action first';
            
            return $this->render('first',['title'=>$title]);
        }
    }

