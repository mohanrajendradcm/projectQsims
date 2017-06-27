<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class LoginForm extends Model
{
   public $project_user_id;

    public $project_user_email;
    public $project_user_password;
    public $project_user_fname;
    public $project_user_lname;
    public $rememberMe = true;


    private $_user=false;


    
    
   const SCENARIO_LOGIN = 'login';
    public function scenarios()
    {
        return [
           
              self::SCENARIO_LOGIN => ['project_user_email','project_user_password','rememberMe'],
        ];
    }
    public function rules()
    {
         return [
            [[ 'project_user_email', 'project_user_password'], 'required'],
            [['project_user_id'], 'integer'],
            ['rememberMe', 'boolean'],
            [['project_user_fname','project_user_lname'],'string'],
            ['project_user_email','email'],
            ['project_user_password', 'validatePassword'],
            [['project_user_id'], 'unique'],
        ];
    }
     public function attributeLabels()
    {
        return [
            'project_user_id' => 'Project User ID',
            'project_user_email' => 'User Email',
            'project_user_password' => 'User Password',
            'project_user_fname' => 'User First name',
            'project_user_lname' => 'Project User Last name',
            'authKey'=>'authKey',
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
         

            if (!$user || !$user->validatePassword($this->project_user_password)) {
                $this->addError($attribute, 'Incorrect username or password.');
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
        }
        return false;
    }
    public function getUser()
    {
        if($this->_user===false){
           $this->_user = ProjectUser::findByEmail($this->project_user_email); 
        }
        return $this->_user;
    }

   
}
