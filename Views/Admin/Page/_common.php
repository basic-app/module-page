<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
use BasicApp\Helpers\Url;

$this->data['title'] = t('admin', 'Pages');

$this->data['mainMenu']['site']['items']['pages']['active'] = true;

$this->data['breadcrumbs'][] = ['label' => $this->data['title'], 'url' => Url::createUrl('admin/page')];