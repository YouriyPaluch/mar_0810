<?php


class View
{
    protected $page;
    protected $template;
    public function __construct($page, $template = null){
        $this->page = $page;
        $this->template = $template ?? $this->template;
    }
    public function render(){
        include_once 'vendor'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.$this->template.'.php';
    }
}