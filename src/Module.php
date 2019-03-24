<?php

namespace effsoft\eff\module\user;

use effsoft\eff\EffModule;

class Module extends EffModule {

    public $module_name = 'site';
    public $dir = __DIR__;

    public function init()
    {
        parent::init();

        $this->registAlias();

        $this->registerThemes();

        $this->registTranslations();

        $this->registSubModules(
            [
                'admin' =>
                    [
                        'class' => 'effsoft\eff\module\user\modules\admin\Module',
                    ],
            ]
        );
    }
}