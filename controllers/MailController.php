<?php

namespace app\controllers;

use Yii;

class MailController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSend()
    {
        $message = Yii::$app->mailer->compose('testing-email', [
            'name' => 'iqbal'
        ])
        ->setFrom('noreply@setneg-ppkk.co.id')
        // ->setFrom('noreply@ppkk.com')
        ->setTo('rmiqbalramadhan@gmail.com')
        ->setSubject('Testing');
        // ->setTextBody('Plain text content')
        // ->setHtmlBody('<b>HTML content</b>')
        // ->send();
        $message->getSwiftMessage()->getHeaders()->addTextHeader('testing', 'testing123');
        $message->send();
    }

}
