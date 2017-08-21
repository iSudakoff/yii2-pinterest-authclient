<?php
/**
 * Project: yii2-pinterest-authclient
 * User: isudakoff
 * Date: 17.05.17
 * Time: 17:17
 */

namespace isudakoff\authclient;

use yii\authclient\OAuth2;

class Pinterest extends OAuth2
{
    /**
     * @inheritdoc
     */
    public $authUrl = 'https://api.pinterest.com/oauth/';
    /**
     * @inheritdoc
     */
    public $tokenUrl = 'https://api.pinterest.com/v1/oauth/token';
    /**
     * @inheritdoc
     */
    public $apiBaseUrl = 'https://api.pinterest.com/v1';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        if ($this->scope === null) {
            $this->scope = 'read_public';
        }
    }

    /**
     * @inheritdoc
     */
    protected function initUserAttributes()
    {
        return $this->api('me', 'GET');
    }

    /**
     * @inheritdoc
     */
    protected function defaultName()
    {
        return 'pinterest';
    }

    /**
     * @inheritdoc
     */
    protected function defaultTitle()
    {
        return 'Pinterest';
    }
}