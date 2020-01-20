<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
namespace BasicApp\Page;

use BasicApp\Page\Events\PageTextEvent;
use BasicApp\Page\Events\PageSeedEvent;

abstract class BasePageEvents extends \CodeIgniter\Events\Events
{

    const EVENT_PAGE_TEXT = 'ba:page_text';

    const EVENT_SEED = 'ba:page_seed';

    public static function text($text)
    {
        $event = new PageTextEvent;

        $event->text = $text;

        static::trigger(static::EVENT_PAGE_TEXT, $event);

        return $event->text;

        return $text;
    }

    public static function seed()
    {
        $event = new PageSeedEvent;

        static::trigger(static::EVENT_PAGE_SEED, $event);
    }

    public static function onText($callback)
    {
        static::on(static::EVENT_PAGE_TEXT, $callback);
    }

    public static function onSeed($callback)
    {
        static::on(static::EVENT_PAGE_SEED, $callback);
    }    

}