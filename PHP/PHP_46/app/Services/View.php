<?php
namespace App\Services;

class View {
    const TEMPLATES_PATH = __DIR__ . '/../../views';
    private $template = '';
    private string $documentPath = 'document.php';
    public function __construct(private string $pathToTemplate, private array $data = []){
        $this->fetchTemplate();
    }
    public function fetchTemplate(): void {
        ob_start();
        extract($this->data);
        include self::TEMPLATES_PATH . '/' . $this->pathToTemplate .'.php';
        $this->template = ob_get_clean();
    } 
    public function setDocumentPath(string $path):self{
        $this->documentPath = $path;
        return $this;
    }
    public function render(): void {
        $content = $this->template; 
        include self::TEMPLATES_PATH . '/' . $this->documentPath;
    }
}

?>