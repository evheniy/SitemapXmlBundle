<?php

namespace Evheniy\SitemapXmlBundle\Validate;

use Evheniy\SitemapXmlBundle\Entity\NewsEntity as Entity;
use Evheniy\SitemapXmlBundle\Exception\ValidateEntityException;

/**
 * Class NewsEntity
 * @package Evheniy\SitemapXmlBundle\Validate
 */
class NewsEntity extends Entity implements ValidateEntityInterface
{
    /**
     * @return $this
     * @throws ValidateEntityException
     */
    public function validate()
    {
        if (empty($this->title)) {
            throw new ValidateEntityException('"Title" field must be not empty!');
        }
        if (empty($this->publicationName)) {
            throw new ValidateEntityException('"PublicationName" field must be not empty!');
        }
        if (empty($this->publicationLanguage) || !preg_match('/^[a-zA-Z]{2,3}([-\/][a-zA-Z]{2,3})?$/', $this->publicationLanguage)) {
            throw new ValidateEntityException('"PublicationLanguage" field must be not empty!');
        }
        if (!empty($this->access) && !in_array($this->access, array('Subscription', 'Registration'))) {
            throw new ValidateEntityException('"Access" field must be "Subscription" or "Registration"!');
        }
        if (!empty($this->genres) && !$this->isValidGenres()) {
            throw new ValidateEntityException('"Genres" field must contain ("PressRelease", "Satire", "Blog", "OpEd", "Opinion", "UserGenerated")!');
        }

        return $this;
    }

    /**
     * @return bool
     */
    protected function isValidGenres()
    {
        return !boolval(
            count(
                array_filter(
                    explode(',', $this->genres),
                    function ($value) {
                        return !in_array(
                            trim($value),
                            array('PressRelease', 'Satire', 'Blog', 'OpEd', 'Opinion', 'UserGenerated')
                        );
                    }
                )
            )
        );
    }
}