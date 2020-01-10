<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
namespace BasicApp\Page\Models\Admin;

abstract class BasePage extends \BasicApp\Page\Models\Page
{

    protected $modelClass = PageModel::class;

    public function getFormattedPublished()
    {
        return $this->page_published ? t('admin', 'Published') : t('admin', 'Not Published');
    }
    
}