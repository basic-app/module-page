<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
use BasicApp\Page\Models\PageModel;

if (!function_exists('page'))
{
    function page(string $url, bool $create = true, array $params = [])
    {
        return PageModel::getPage($url, $create, $params);
    }
}