<?php
namespace KayStrobach\Wysiwyg\Widget;

use TYPO3\Fluid\Core\Widget\AbstractWidgetViewHelper;

class WysiwygEditorViewHelper extends AbstractWidgetViewHelper {

	/**
	 * @Flow\Inject
	 * @var \KayStrobach\Wysiwyg\ViewHelpers\Widget\Controller\WysiwygEditorController
	 */
	protected $controller;

	/**
	 * @param array $buttons
	 * @return string
	 */
	public function render($buttons = array()) {
		$response = $this->initiateSubRequest();
		return $response->getContent();
	}
}