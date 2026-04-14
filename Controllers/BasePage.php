<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
namespace BasicApp\Page\Controllers;

use BasicApp\Page\Models\PageModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use App\Controllers\BaseController;

abstract class BasePage extends BaseController
{
    protected $viewPath = 'BasicApp\Page';

    protected $layout = false;

    public function view($url = 'index')
    {
        $pageModel = model(PageModel::class);

        $page = $pageModel->where('page_url', $url)->first();

        if (!$page || !$page->page_published)
        {
            throw new PageNotFoundException;
        }

        return view('BasicApp\Page\_view', [
            'page' => $page
        ]);
    }
}
