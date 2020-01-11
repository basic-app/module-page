<?php

use BasicApp\Helpers\Url;
use BasicApp\Admin\AdminEvents;

AdminEvents::onMainMenu(function($event)
{
    if (BasicApp\Page\Controllers\Admin\Page::checkAccess())
    {
        $event->items['site']['items']['pages'] = [
            'url'   => Url::createUrl('admin/page'),
            'label' => t('admin.menu', 'Pages')
        ];
    }
});