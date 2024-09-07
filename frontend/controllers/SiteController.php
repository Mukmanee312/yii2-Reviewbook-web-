<?php

namespace frontend\controllers;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use common\models\Category;
use common\models\Product;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup','na','nb','nm','nn','nw','nx','nz','read'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout','na','nb','nm','nn','nw','nx','nz','read'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
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
    public function actionShop(){return $this->render("Shop");}
    public function actionPower(){return $this->render("power");}
    public function actionGlow(){return $this->render("glow");}
    public function actionCafe(){return $this->render("cafe");}
    public function actionHap(){return $this->render("hap");}
    public function actionOne(){return $this->render("one");}
    public function actionGad(){return $this->render("gad");}
    public function actionLew(){return $this->render("lew");}
    public function actionTonsom(){return $this->render("tonsom");}
    public function actionSmong(){return $this->render("smong");}
    public function actionSada(){return $this->render("sada");}
    public function actionPeter(){return $this->render("peter");}
    public function actionRus(){return $this->render("rus");}
    public function actionWun(){return $this->render("wun");}
    public function actionKim(){return $this->render("kim");}
    public function actionRan(){return $this->render("ran");}
    public function actionWui(){return $this->render("wui");}
    public function actionBan(){return $this->render("ban");}
    public function actionSob(){return $this->render("sob");}
    public function actionGo(){return $this->render("go");}
    public function actionCadee(){return $this->render("cadee");}
    public function actionCont(){return $this->render("cont");}
    public function actionCom(){return $this->render("com");}
    public function actionTa(){return $this->render("ta");}
    public function actionAlmond(){return $this->render("almond");}
    public function actionTonkom(){return $this->render("tonkom");}
    public function actionBud(){return $this->render("bud");}
    public function actionPe(){return $this->render("pe");}
    public function actionSon(){return $this->render("son");}
    public function actionLit(){return $this->render("lit");}
    public function actionInto(){return $this->render("into");}
    public function actionChen(){return $this->render("chen");}
    public function actionTong(){return $this->render("tong");}
    public function actionNw(){ return $this->render('nw');}
    public function actionNn(){return $this->render("nn");}
    public function actionNm(){return $this->render("nm");}
    public function actionNb(){return $this->render("nb");}
    public function actionNx(){return $this->render("nx");}
    public function actionNz(){return $this->render("nz");}
    public function actionNa(){return $this->render("na");}
    public function actionRead(){return $this->render("read");}
    public function actionBook(){
        $model_product = Product ::find()->all();
        return $this->render('book',
                            [
                                "model" => $model_product
                            ]);
    }
   
    public function actionNew()
    { 
        $model_product = Product ::find() ->all();
        return $this->render('new',
                                [
                                    "model" =>$model_product
                                ]);
    } 
   
   
    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render("index");
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        $this -> layout = "main-login";
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        }

        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    
    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            }

            Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if (($user = $model->verifyEmail()) && Yii::$app->user->login($user)) {
            Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
            return $this->goHome();
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }
}
