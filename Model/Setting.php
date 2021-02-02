<?php

namespace Dealer4dealer\Pricelist\Model;

use Dealer4dealer\Pricelist\Api\Data\SettingInterface;

class Setting implements SettingInterface
{
    protected $field;
    protected $value;

    /**
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @var string $field
     * @return $this
     */
    public function setField($field)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @var string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}