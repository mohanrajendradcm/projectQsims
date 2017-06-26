<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project_details".
 *
 * @property int $project_id
 * @property string $project_name
 * @property string $Assigne
 * @property string $status
 */
class ProjectDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_name', 'Assigne', 'status'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'project_id' => 'Project ID',
            'project_name' => 'Project Name',
            'Assigne' => 'Assigne',
            'status' => 'Status',
        ];
    }
}
