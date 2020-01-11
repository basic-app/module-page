<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
use BasicApp\Helpers\Url;
use BasicApp\Admin\AdminEvents;
use BasicApp\System\SystemEvents;
use BasicApp\System\Events\SystemResetEvent;
use BasicApp\System\Events\SystemSeedEvent;
use BasicApp\Page\Database\Seeds\PageResetSeeder;
use BasicApp\Page\Database\Seeds\PageSeeder;
use Config\Database;
use BasicApp\Page\Controllers\Admin\Page as PageController;

AdminEvents::onMainMenu(function($event)
{
    if (PageController::checkAccess())
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

SystemEvents::onSeed(function(SystemSeedEvent $event)
{
    $seeder = Database::seeder();

    $seeder->call(PageSeeder::class);
});