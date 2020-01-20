<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
namespace BasicApp\Page;

use BasicApp\Page\Events\PageTextEvent;

abstract class BasePageEvents extends \CodeIgniter\Events\Events
{

    const EVENT_PAGE_TEXT = 'ba:page_text';

    public static function pageText($text)
    {
        $event = new PageTextEvent;

        $event->text = $text;

        static::trigger(static::EVENT_PAGE_TEXT, $event);

        return $event->text;

        return $text;
    }

    public static function onPageText($callback)
    {
        static::on(static::EVENT_PAGE_TEXT, $callback);
    }

}