<?php

namespace effsoft\eff\module\user\modules\admin\controllers;

use effsoft\eff\EffController;
use effsoft\eff\module\passport\models\UserModel;
use yii\data\Pagination;

class ManageController extends EffController{

    public function actionIndex(){
        $query = UserModel::find()->orderBy(['_id' => SORT_DESC]);
        $totalCount = $query->count();
        $pagination = new Pagination(['totalCount' => $totalCount]);
        // $pagination->setPageSize(1);
        $users = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
            // print_r($users);
        return $this->render('//user/admin/manage/index',[
            'pagination' => $pagination,
            'totalCount' => $totalCount,
            'users' => $users,
        ]);
    }
}