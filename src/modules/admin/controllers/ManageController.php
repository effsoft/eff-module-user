<?php

namespace effsoft\eff\module\user\modules\admin\controllers;

use effsoft\eff\EffController;
use effsoft\eff\module\passport\models\UserModel;
use yii\data\Pagination;
use yii\filters\AccessControl;

class ManageController extends EffController{

    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ]
        ];
    }

    public function actionIndex(){
        
        return $this->render('//user/admin/manage/index',[]);
    }
}