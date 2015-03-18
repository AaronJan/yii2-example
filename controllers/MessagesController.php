<?php

namespace app\controllers;

use app\models\Message;
use Yii;


class MessagesController extends \yii\web\Controller
{
    public $enableCsrfValidation = true; //CSRF验证

    public function actionCreate()
    {
        $model = new Message();

        if (isset($_POST['content']))
        {
            $model->load($_POST, ''); // 禁用formName

            if ($model->save())
            {
                Yii::$app->session->setFlash('success', 'Model has been saved');
            }
            else
            {
                Yii::$app->session->setFlash('errors', $model->firstErrors);
            }
        }

        $this->goBack();
    }


}
