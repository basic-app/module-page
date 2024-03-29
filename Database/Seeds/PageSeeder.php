<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
namespace BasicApp\Page\Database\Seeds;

use BasicApp\Page\Models\PageModel;

class PageSeeder extends \BasicApp\Core\Seeder
{

    public function run()
    {
        PageModel::getPage('index', true, [
            'page_name' => 'Index',
            'page_text' => '<p>Index page text.</p>',
            'page_published' => 1
        ]);

        PageModel::getPage('about', true, [
            'page_name' => 'About',
            'page_text' => '<p>About page text.</p>',
            'page_published' => 1
        ]);
    }

}