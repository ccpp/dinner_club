<?php
namespace CP\DinnerClub\ViewHelpers;

use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;
use GeorgRinger\News\Domain\Model\News;

class GetRegistrationsViewHelper extends AbstractViewHelper {

	/**
	 * @var \CP\DinnerClub\Domain\Repository\RegistrationRepository
	 * @inject
	 */
	protected $registrationRepository;

	/**
	 * @param GeorgRinger\News\Domain\Model\News item
	 */
	public function render(News $newsItem = null) {
		if (!$newsItem) {
			$newsItem = $this->renderChildren();
		}
		return $this->registrationRepository->findByEvent($newsItem);
	}
}
