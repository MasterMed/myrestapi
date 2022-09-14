<?php

namespace Mastermed\Coursework;

/**
 * Класс пользователя
 *
 * @author Александр
 */
class User 
{
    public $id;
    public $name;
    public $surname;
    
    public function __toString() 
    {
        return $name . ' ' . $surname;
    }
}
