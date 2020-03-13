<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
use BasicApp\Page\Models\PageModel;

if (!function_exists('getPage'))
{
    function getPage(string $url, bool $create = true, array $params = [])
    {
        return PageModel::getPage($url, $create, $params);
    }
}