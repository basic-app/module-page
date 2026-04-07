<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
use BasicApp\Helpers\Url;

$this->tempData['title'] = t('admin', 'Pages');

$this->tempData['mainMenu']['site']['items']['pages']['active'] = true;

$this->tempData['breadcrumbs'][] = ['label' => $this->tempData['title'], 'url' => Url::createUrl('admin/page')];