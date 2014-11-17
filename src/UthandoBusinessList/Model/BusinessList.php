<?php

namespace UthandoBusinessList\Model;

use UthandoCommon\Model\DateCreatedTrait;
use UthandoCommon\Model\DateModifiedTrait;
use UthandoCommon\Model\Model;
use UthandoCommon\Model\ModelInterface;

class BusinessList implements ModelInterface
{
    use Model,
        DateCreatedTrait,
        DateModifiedTrait;

    /**
     * @var int
     */
    protected $businessListId;

    /**
     * @var int
     */
    protected $userId;

    /**
     * @var string
     */
    protected $telephone;

    /**
     * @var string
     */
    protected $slug;

    /**
     * @var string
     */
    protected $image;

    /**
     * @var string
     */
    protected $location;

    /**
     * @var string
     */
    protected $company;

    /**
     * @var string
     */
    protected $website;

    /**
     * @var string
     */
    protected $sector;

    /**
     * @var string
     */
    protected $text;

    /**
     * @return int
     */
    public function getBusinessListId()
    {
        return $this->businessListId;
    }

    /**
     * @param $businessListId
     * @return $this
     */
    public function setBusinessListId($businessListId)
    {
        $this->businessListId = $businessListId;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param $telephone
     * @return $this
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param $slug
     * @return $this
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param $company
     * @return $this
     */
    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param $image
     * @return $this
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return string
     */
    public function getSector()
    {
        return $this->sector;
    }

    /**
     * @param $sector
     * @return $this
     */
    public function setSector($sector)
    {
        $this->sector = $sector;
        return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param $text
     * @return $this
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param $website
     * @return $this
     */
    public function setWebsite($website)
    {
        $this->website = $website;
        return $this;
    }

} 