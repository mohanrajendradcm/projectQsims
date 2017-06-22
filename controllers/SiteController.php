<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\ProjectUser;
use yii\helpers\Url;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public $layout = 'main';
    public function behaviors()
    {
        return [
            'access' => [
               'class' => \yii\filters\AccessControl::className(), 
                'only' => ['logout','login','index','about','contact'],
                'rules' => [
                    [
                        'actions' => ['login'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                      [
                        'actions' => ['error','index','logout','about','contact'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    
                ],
            ],
          
        ];
    }
    
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

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
     * Login action.
     *
     * @return Response|string
     */
  /*  public function beforeAction($action)
{        
    if (\Yii::$app->getUser()->isGuest &&
        \Yii::$app->getRequest()->url !== Url::to(\Yii::$app->getUser()->loginUrl)
    ) {
        \Yii::$app->getResponse()->redirect(\Yii::$app->getUser()->loginUrl);
    }
    return parent::beforeAction($action);
}*/

      public function actionLogin()
   {
       
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
  
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
        //    var_dump($model->login());exit;
           // return $this->redirect(Url::toRoute(['site/index'])); 
       return $this->goBack();
      
        }
        else
        {
        return $this->render('login', [
            'model' => $model,
        ]);
    }
   }

   
    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
