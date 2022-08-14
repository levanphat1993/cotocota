<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\SignupForm;
use app\models\LoginForm;
use app\models\VerifyUserForm;


class SiteController extends Controller
{

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Displays dashboard.
     *
     * @return string
     */
    public function actionDashboard()
    {
        return $this->render('dashboard');
    }

    /**
     * Displays login.
     *
     * @return string
     */
    public function actionLogin()
    {
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect('dashboard');
        }

        return $this->render('login', [
            'model' => $model
        ]);
    }

    /**
     * Displays signup.
     *
     * @return string
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            return $this->redirect('verify-user');
        }

        return $this->render('signup', [
            'model' => $model
        ]);
    }

    /**
     * Displays verify user.
     *
     * @return string
     */
    public function actionVerifyUser()
    {
       
        $model = new VerifyUserForm();
        if ($model->load(Yii::$app->request->post()) && $model->verifyUser()) {
            return $this->redirect('login');
        }

        return $this->render('verifyuser', [
            'model' => $model
        ]);
    }
}
