<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
use BasicApp\Page\Models\PageModel;
use BasicApp\Helpers\Url;

require __DIR__ . '/_common.php';

unset($this->data['breadcrumbs'][count($this->data['breadcrumbs']) - 1]['url']);

$this->data['actionMenu'][] = [
    'url' => Url::returnUrl('admin/page/create'), 
    'label' => t('admin', 'Create'), 
    'icon' => 'fa fa-plus',
    'linkAttributes' => [
        'class' => 'btn btn-success'
    ]
];

$adminTheme = service('adminTheme');

echo $adminTheme->grid([
    'headers' => [
        ['class' => $adminTheme::GRID_HEADER_PRIMARY_KEY, 'content' => $model->getFieldLabel('page_id')],
        $model->getFieldLabel('page_created_at'),
        ['class' => $adminTheme::GRID_HEADER_LABEL, 'content' => $model->getFieldLabel('page_url')],
        $model->getFieldLabel('page_name'),
        ['class' => $adminTheme::GRID_HEADER_BOOLEAN, 'content' => $model->getFieldLabel('page_published')],
        ['class' => $adminTheme::GRID_HEADER_BUTTON_UPDATE],
        ['class' => $adminTheme::GRID_HEADER_BUTTON_DELETE]
    ],
    'items' => function() use ($elements, $adminTheme) {
        
        foreach($elements as $data)
        {
            yield [
                $data->page_id,
                $data->page_created_at,
                $data->page_url,
                $data->page_name,
                $data->page_published,
                ['url' => Url::returnUrl('admin/page/update', ['id' => $data->page_id])],
                ['url' => Url::returnUrl('admin/page/delete', ['id' => $data->page_id])]                
            ];
        }
    }
]);

if ($pager)
{
    echo $pager->links('default', 'adminTheme');
}