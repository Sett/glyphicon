<?php
namespace funcraft\glyphicon\components;
/**
 * Class Glyphicon
 * @package funcraft\glyphicon\components
 * @author Funcraft <what4me@ya.ru>
 */
class Glyphicon
{
    const User          = 'user';
    const Author        = 'user';
    const Book          = 'book';
    const Plus          = 'plus';
    const Minus         = 'minus';
    const Mail          = 'envelope';
    const Certificate   = 'certificate';
    const Pencil        = 'pencil';
    const Edit          = 'pencil';
    const Heart         = 'heart';
    const Star          = 'star';
    const StarEmpty     = 'star-empty';
    const Delete        = 'remove';
    const Remove        = 'remove';
    const Trash         = 'trash';
    const Time          = 'time';
    const ListAlt       = 'list-alt';
    const Lock          = 'lock';
    const Tag           = 'tag';
    const Picture       = 'picture';
    const Image         = 'picture';
    const Gift          = 'gift';
    const EyeOpen       = 'eye-open';
    const EyeClose      = 'eye-close';
    const Warning       = 'warning-sign';
    const Calendar      = 'calendar';
    const Year          = 'calendar';
    const Comment       = 'comment';
    const Education     = 'education';
    const Ok            = 'ok';
    const Done          = 'ok';
    const Up            = 'arrow-up';
    const Down          = 'arrow-down';
    const MenuLeft      = 'menu-left';
    const MenuRight     = 'menu-right';
    const Lower         = 'menu-left';
    const Bigger        = 'menu-right';
    const Repeat        = 'repeat';

    /**
     * @var string
     */
    protected $type = '';

    /**
     * @var string
     */
    protected $color = '';

    /**
     * @var string
     */
    protected $title = '';

    /**
     * Glyphicon constructor.
     *
     * @param string $type
     * @param string $color
     */
    public function __construct(string $type = '', string $color = '')
    {
        $type  && $this->setType($type);
        $color && $this->setColor($color);
    }
    
    /**
     * @return string
     */
    public function __toString()
    {
        return $this->render();
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param string $color
     * @return $this
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function render()
    {
        $style = ($color = $this->getColor()) ? ' style="color: ' . $color . '" ' : '';
        $title = ($text = $this->getTitle()) ? ' title="' . $text . '" ' : '';

        return '<span ' . $title . $style . ' class="glyphicon glyphicon-' . $this->getType() . '" aria-hidden="true"></span>';
    }

    /**
     * @param string $type
     * @param string $color
     * @return string
     */
    public static function renderIcon($type, $color = '')
    {
        return (new static($type, $color))->render();
    }
}
