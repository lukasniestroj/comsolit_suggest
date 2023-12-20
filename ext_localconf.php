<?php

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'comsolit_suggest',
	'Suggest',
    [
		\Comsolit\ComsolitSuggest\Controller\QueryController::class => 'suggest',
	]
);
