<?php

$this->setVar('title', $page->page_name);
$this->setVar('description', $page->page_description);
$this->setVar('keywords', $page->page_keywords);
$this->setVar('navMenuActiveItem', $page->page_url);

$this->extend('BasicApp\Site\layouts/app');

$this->section('content');

echo view_cell('Site::card', [
    'title' => $page->page_name,
    'body' => $page->page_text
]);

$this->endSection();