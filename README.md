# yii2-pinterest-authclient

This extension adds Pinterest OAuth2 supporting for [yii2-authclient](https://github.com/yiisoft/yii2-authclient).

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist isudakoff/yii2-pinterest-authclient "*"
```

or add

```json
"isudakoff/yii2-pinterest-authclient": "*"
```

to the `require` section of your composer.json.

## Usage

You must read the yii2-authclient [docs](https://github.com/yiisoft/yii2-authclient/tree/master/docs/guide)

Register your application [in Pinterest](https://developers.pinterest.com/apps/)

and add the Pinterest client to your auth clients.

```php
'components' => [
    'authClientCollection' => [
        'class' => 'yii\authclient\Collection',
        'clients' => [
            'pinterest' => [
                'class' => 'isudakoff\authclient\Pinterest',
                    'clientId' => 'pinterest_app_id',
                    'clientSecret' => 'pinterest_app_secret',
                ],
            ],
            // other clients
        ],
    ],
    // ...
 ]
 ```