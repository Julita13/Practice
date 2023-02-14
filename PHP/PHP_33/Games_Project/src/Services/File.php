<?php

namespace App\Services;
class File
{
    public function __construct(private string $filePath)
    {
    }

    public function exists()
    {
        return file_exists($this->filePath);
    }

    public function read(): string
    {
        if (!$this->exists()) {
            throw new \Exception('Failas neegzistuoja');
        }

        return file_get_contents($this->filePath);
    }

    public function create(): bool
    {
        if ($this->exists()) {
            throw new \Exception('Failas jau egzistuoja');
        }

        return touch($this->filePath);
    }

    public function write(string $text, bool $overwrite = false): int|false
    {
        if ($this->read() && !$overwrite) {
            throw new \Exception('Failo turinys ne tuščias');
        }

        return file_put_contents($this->filePath, $text);
    }
}
