<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
namespace BasicApp\Page\Models\Admin;

abstract class BasePageModel extends \BasicApp\Page\Models\PageModel
{

    protected $returnType = Page::class;

	protected $allowedFields = [
		'page_url',
		'page_name',
		'page_text',
		'page_published'
	];

	protected $validationRules = [
		'page_name' => 'not_special_chars|max_length[255]',
		'page_url' => 'not_special_chars|max_length[255]|is_unique[pages.page_url,page_id,{page_id}]|required',
		'page_text' => 'max_length[65535]',
		'page_published' => 'in_list[0,1]'
	];

}