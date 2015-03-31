<?php
/**
 * Created by PhpStorm.
 * User: kay
 * Date: 30.03.15
 * Time: 20:14
 */

namespace KayStrobach\Wysiwyg\ViewHelpers\Widget\Controller;


class WysiwygEditorController extends \TYPO3\Fluid\Core\Widget\AbstractWidgetController {
	public function indexAction() {
		//$this->widgetConfiguration;
		$before = '';
		foreach($buttons as $button) {
			$before .= '<a href="#" data-wysihtml5-command="' . $button . '">' . $button . '</a>';
		}
		$before = '<div id="toolbar-' . $this->tag->getAttribute('id') . '">' . $before . '</div>';
		$before.= '<script>';
		return $before . parent::render();
	}
}