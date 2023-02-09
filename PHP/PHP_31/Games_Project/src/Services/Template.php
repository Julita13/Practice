<?php

namespace App\Services;

class Template
{
    const TEMPLATES_PATH = __DIR__  . '/../../templates';
    private $template = '';

    public function __construct(private string $pathToTemplate, private array $data = [])
    {
        $this->fetchTemplate();
    }

    public function fetchTemplate(): void
    {
        ob_start();
        extract($this->data);
        include self::TEMPLATES_PATH . '/' . $this->pathToTemplate;
        $this->template = ob_get_clean();
    }

    public function render(): void
    {
        $content = $this->template;
        include self::TEMPLATES_PATH . '/' . 'document.php';
    }
}
