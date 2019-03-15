<?php
namespace AlbanyDesigns\NPPESApi\Entity;


class OtherName
{
    /**
     * @var string
     */
    private $organization_name;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $type;




    /**
     * @return string
     */
    public function getOrganizationName()
    {
        return $this->organization_name;
    }

    /**
     * @param string $name
     */
    public function setOrganizationName($organization_name)
    {
        $this->organization_name = $organization_name;
    }



    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

}