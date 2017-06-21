<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project_user".
 *
 * @property int $project_user_id
 * @property string $project_user_email
 * @property string $project_user_password
 * @property string $project_user_fname
 * @property string $project_user_lname
 */
class ProjectUser extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
           // [['project_user_id', 'project_user_email', 'project_user_password', 'project_user_fname'], 'required'],
            [['project_user_id'], 'integer'],
            [['project_user_email', 'project_user_fname', 'project_user_lname'], 'string', 'max' => 45],
            [['project_user_password'], 'string', 'max' => 100],
            [['authKey'],'string','max'=>20],
            [['project_user_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'project_user_id' => 'Project User ID',
            'project_user_email' => 'User Email',
            'project_user_password' => 'Project User Password',
            'project_user_fname' => 'Project User Fname',
            'project_user_lname' => 'Project User Lname',
            'authKey'=>'authKey',
        ];
    }
    public function getAuthKey()
    {
         return $this->authKey;
    }
    public function getId()
    {
        return $this->project_user_id;
    }
    public function validateAuthKey($authKey)
    {
        $this->authKey === $authKey;
    }
    public static function findIdentity($id)
    {
        return self::findOne($id);
    }
    public static function findIdentityByAccessToken($token, $type = null) {
        throw new \yii\base\NotSupportedException();
    }
    public static function findByEmail($project_user_email)
    {
        return self::findOne(['project_user_email' => $project_user_email]);
    }
    public  function validatePassword($project_user_password)
    {
       return $this->project_user_password===$project_user_password;
    }
}
