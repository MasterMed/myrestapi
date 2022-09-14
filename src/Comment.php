<?php

namespace Mastermed\Coursework;

/**
 * Класс комментария
 *
 * @author Александр
 */
class Comment
{
    public $id;
    public $authorId;
    public $articleId;
    public $text;
    
    public function __toString() 
    {
        return $text;
    }
}
