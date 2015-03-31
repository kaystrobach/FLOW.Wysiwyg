<?php
/**
 * Created by PhpStorm.
 * User: kay
 * Date: 30.03.15
 * Time: 20:14
 */

namespace KayStrobach\Wysiwyg\ViewHelpers\Widget\Controller;


use TYPO3\Fluid\Core\Widget\AbstractWidgetController;
use TYPO3\Flow\Annotations as Flow;


class WysiwygEditorController extends AbstractWidgetController {
	protected $buttonMap = [
		'bold' => [
			'cmd' => 'bold',
			'icon' => 'fa fa-bold',
			'text' => 'bold'
		],
		'createLink' => [
			'cmd' => 'createLink',
			'icon' => 'fa fa-link',
			'text' => 'createLink'
		],
		'removeLink' => [
			'cmd' => 'removeLink',
			'icon' => 'fa fa-chain-broken',
			'text' => 'removeLink'
		],
		'insertBlockQuote' => [
			'cmd' => 'insertBlockQuote',
			'icon' => 'fa fa-quote-left',
			'text' => 'insertBlockQuote'
		],
		'insertUnorderedList' => [
			'cmd' => 'insertUnorderedList',
			'icon' => 'fa fa-list-ul',
			'text' => 'insertUnorderedList'
		],
		'insertOrderedList' => [
			'cmd' => 'insertOrderedList',
			'icon' => 'fa fa-list-ol',
			'text' => 'insertOrderedList'
		],
		'outdentList' => [
			'cmd' => 'outdentList',
			'icon' => 'fa fa-outdent',
			'text' => 'outdentList'
		],
		'indentList' => [
			'cmd' => 'indentList',
			'icon' => 'fa fa-indent',
			'text' => 'indentList'
		],
		'undo' => [
			'cmd' => 'undo',
			'icon' => 'fa fa-undo',
			'text' => 'undo'
		],
		'redo' => [
			'cmd' => 'redo',
			'icon' => 'fa fa-repeat',
			'text' => 'redo'
		]

	];
	public function indexAction() {
		$this->view->assign('config', $this->widgetConfiguration);
		$buttons = array();
		foreach($this->widgetConfiguration['buttons'] as $button) {
			if(array_key_exists($button, $this->buttonMap)) {
				$buttons[] = $this->buttonMap[$button];
			}
		}
		$this->view->assign('buttons', $buttons);
	}
}
