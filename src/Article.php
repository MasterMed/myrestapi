<?php

namespace Mastermed\Coursework;

/**
 * Класс статьи
 *
 * @author Александр
 */
class Article 
{
    public $id;
    public $userId;
    public $title;
    public $text;
    
    
    public function __toString() 
    {
        return $title . ' >>> ' . $text;
    }
}
