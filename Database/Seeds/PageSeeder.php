<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
namespace BasicApp\Page\Database\Seeds;

use BasicApp\Site\Models\PageModel;
use BasicApp\Page\PageEvents;

class PageSeeder extends \BasicApp\Core\Seeder
{

    public function run()
    {
        if ($this->db->table('pages')->countAllResults() > 0)
        {
            return;
        }

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

        PageEvent::seed();
    }

}