<?php
namespace KayStrobach\Wysiwyg\ViewHelpers\Widget;

use TYPO3\Fluid\Core\Widget\AbstractWidgetViewHelper;
use Neos\Flow\Annotations as Flow;


class WysiwygEditorViewHelper extends AbstractWidgetViewHelper {

	/**
	 * @Flow\Inject
	 * @var \KayStrobach\Wysiwyg\ViewHelpers\Widget\Controller\WysiwygEditorController
	 */
	protected $controller;

	/**
	 * @param string $id
	 * @param array $buttons
	 * @return string
	 * @throws \Exception
	 */
	public function render($id = '', $buttons = array()) {
		$response = $this->initiateSubRequest();
		return $response->getContent();
	}
}