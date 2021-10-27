<?php
class Human
{
    public $health;
    public $clan;
    public $str = 3;
    public $int = 3;
    public $stealth = 3;
    public function __construct()
    {
        echo "I am alive, I guess.";
        $this->health = 100;
        return $this;
    }

    public function __get($property)
    {
        if (property_exists($this, $property)) { {
                return $this->$property;
            }
        }
        return $this;
    }

    public function __set($property, $value)
    {
        if (property_exists($this, $property)) { {
                $this->$property = $value;
            }
        }
        return $this;
    }

    public function trashTalk()
    {
        echo "You want a piece of me?";
        return $this;
    }

    public function attack($human)
    {
        $this->trashTalk();
        $luck = rand(0, 100);
        if ($luck * $this->intelligence > 1000) {
            if ($luck > $human->stealth) {
                $human->health -= $this->strength;
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
        return $this;
    }
};
