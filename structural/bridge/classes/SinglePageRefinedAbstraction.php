<?php
namespace structural\bridge\classes;

use structural\bridge\interfaces\interfaceImplementation;

class SinglePageRefinedAbstraction extends PageAbstraction
{
    protected $title;
    protected $content;

    public function __construct(interfaceImplementation $renderer, string $title, string $content)
    {
        parent::__construct($renderer);
        $this->title = $title;
        $this->content = $content;
    }

    public function view(): string
    {
        return $this->renderer->renderParts([
            $this->renderer->renderHeader(),
            $this->renderer->renderTitle($this->title),
            $this->renderer->renderTextBlock($this->content),
            $this->renderer->renderFooter()
        ]);
    }
}