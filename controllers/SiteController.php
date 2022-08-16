<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

use app\models\form\LoginForm;

class SiteController extends Controller
{

    /**
     * Displays home page.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Displays login page.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
      
        $csrfToken = Yii::$app->request->csrfToken;

        if (Yii::$app->request->post()) { // check method is post
            
            $data = Yii::$app->request->post();
            $model = new LoginForm();
            $model->load($data); // init data by form

            if ($model->login()) {
                $this->redirect('dashboard');
            }
            

        }
        
        return $this->render( 'login', ['csrfToken' => $csrfToken ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
       // TODO
    }


    
    /**
     * Displays services page.
     *
     * @return string
     */
    public function actionServices()
    {
        return $this->render('services');
    }

    /**
     * Displays about page.
     *
     * @return Response|string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        return $this->render('contact');
    }

    


    
}