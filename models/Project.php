<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project".
 *
 * @property int $project_id
 * @property string $project_name
 * @property string $project_description
 * @property string $project_owner
 * @property string $created_date
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_name','project_description','project_owner','company_id'], 'required'],
            [['created_date'], 'safe'],
            [['project_name', 'project_description', 'project_owner'], 'string', 'max' => 45],
            [['project_name','project_description', 'project_owner'],'filter','filter'=>'\yii\helpers\HtmlPurifier::process'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'project_id' => Yii::t('app', 'Project ID'),
            'project_name' => Yii::t('app', 'Project Name'),
            'project_description' => Yii::t('app', 'Project Description'),
            'project_owner' => Yii::t('app', 'Project Owner'),
            'created_date' =>  Yii::t('app', 'Project Created'),
            'company_id' => Yii::t('app','company Name'),
        ];
    }
}
