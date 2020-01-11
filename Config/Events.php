<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
use BasicApp\Helpers\Url;
use BasicApp\Admin\AdminEvents;
use BasicApp\System\Events\SystemResetEvent;
use BasicApp\Page\Database\Seeds\ConfigResetSeeder;

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

SystemEvents::onReset(function(SystemResetEvent $event)
{
    $seeder = Database::seeder();

    $seeder->call(PageResetSeeder::class);
});