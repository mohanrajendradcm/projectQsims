<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project_company".
 *
 * @property int $company_id
 * @property string $company_name
 */
class ProjectCompany extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project_company';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'company_id' => 'Company ID',
            'company_name' => 'Company Name',
        ];
    }
}
