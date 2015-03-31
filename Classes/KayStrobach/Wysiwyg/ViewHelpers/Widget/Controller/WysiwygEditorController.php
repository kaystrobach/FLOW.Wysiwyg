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
			'icon' => 'glyphicon glyphicon-bold',
			'text' => 'bold'
		],
		'createLink' => [
			'cmd' => 'createLink',
			'icon' => 'glyphicon glyphicon-link',
			'text' => 'createLink'
		],
		'removeLink' => [
			'cmd' => 'removeLink',
			'icon' => 'glyphicon glyphicon-link',
			'text' => 'removeLink'
		],
		'insertBlockQuote' => [
			'cmd' => 'insertBlockQuote',
			'icon' => 'glyphicon glyphicon-console',
			'text' => 'insertBlockQuote'
		],
		'insertUnorderedList' => [
			'cmd' => 'insertUnorderedList',
			'icon' => 'glyphicon glyphicon-list',
			'text' => 'insertUnorderedList'
		],
		'insertOrderedList' => [
			'cmd' => 'insertOrderedList',
			'icon' => 'glyphicon glyphicon-list',
			'text' => 'insertOrderedList'
		],
		'outdentList' => [
			'cmd' => 'outdentList',
			'icon' => 'glyphicon glyphicon-indent-left',
			'text' => 'outdentList'
		],
		'indentList' => [
			'cmd' => 'indentList',
			'icon' => 'glyphicon glyphicon-indent-left',
			'text' => 'indentList'
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