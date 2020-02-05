<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
namespace BasicApp\Page\Controllers;

use BasicApp\Page\Models\PageModel;
use CodeIgniter\Exceptions\PageNotFoundException;

abstract class BasePage extends \BasicApp\Site\SiteController
{

    protected $viewPath = 'BasicApp\Page\Views\Page';

    protected function _createIndexPage()
    {
        return PageModel::getPage('index', true, [
            'page_name' => 'Index', 
            'page_text' => app_view('BasicApp\Page\Views\_default-index-page'),
            'page_published' => 1
        ]);
    }

    public function view($url = 'index')
    {
        $pageModel = new PageModel;

        $page = $pageModel->where('page_url', $url)->first();

        if (!$page)
        {
            if ($url != 'index')
            {
                throw new PageNotFoundException;
            }

            $page = $this->_createIndexPage();
        }

        if (!$page->page_published && ($url != 'index'))
        {
            throw new PageNotFoundException;
        }

        if (is_file(APPPATH . 'Views/BasicApp/Page/Page/' . $page->page_url . '.php'))
        {
            $template = $page->page_url;
        }
        else
        {
            $template = '_view';
        }

        return $this->render($template, [
            'page' => $page
        ]);
    }

}
