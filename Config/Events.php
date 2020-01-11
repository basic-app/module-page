<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
use BasicApp\Helpers\Url;
use BasicApp\Admin\AdminEvents;
use BasicApp\System\Events\SystemSeedEvent;
use BasicApp\System\Events\SystemResetEvent;
use BasicApp\Page\Database\Seeds\ConfigSeeder;
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

SystemEvents::onSeed(function(SystemSeedEvent $event)
{
    $seeder = Database::seeder();

    $seeder->call(ConfigSeeder::class);
});

SystemEvents::onReset(function(SystemResetEvent $event)
{
    $seeder = Database::seeder();

    $seeder->call(ConfigResetSeeder::class);
});