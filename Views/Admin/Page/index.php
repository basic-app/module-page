<?php

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

echo $adminTheme->table([
    'labels' => [
        $model->getFieldLabel('page_id'),
        $model->getFieldLabel('page_created_at'),
        $model->getFieldLabel('page_url'),
        $model->getFieldLabel('page_name'),
        $model->getFieldLabel('page_published'),
        '',
        ''
    ],
    'elements' => $elements,
    'columns' => function($model) {
        return [
            $this->createColumn(['field' => 'page_id'])->displaySmall()->number(),
            $this->createColumn(['field' => 'page_created_at'])->displayMedium(),
            $this->createColumn(['field' => 'page_url'])->success()->displaySmall(),
            $this->createColumn(['field' => 'page_name']),
            $this->createBooleanColumn(['field' => 'page_published'])->displayLarge(),
            $this->createUpdateLinkColumn(['action' => 'admin/page/update']),
            $this->createDeleteLinkColumn(['action' => 'admin/page/delete'])
        ];
    }
]);

if ($pager)
{
    echo $pager->links('default', 'adminTheme');
}