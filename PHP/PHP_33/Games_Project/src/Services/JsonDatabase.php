<?php

namespace App\Services;

use App\Services\File;

class JsonDatabase
{
    public array $records;
    public function __construct(public File $file)
    {
        $this->records = $this->getRecords();
    }
    public function getRecords(): array
    {
        $content = $this->file->read();
        $decoded = json_decode($content, true);
        if ($content && !$decoded) {
            throw new \Exception('Failo turinys yra ne json');
        }
        return $decoded ?? [];
    }

    public function findRecord(int $id): array
    {
        foreach ($this->records as $record) {
            if ((int)$record['id'] === $id) {
                return $record;
            }
        }

        return [];
    }

    public function createRecord(array $data): int|false
    {
        $data['id'] = $this->generateId(); 
        array_push($this->records,$data);
        return $this->insertRecord();    
    }

    public function updateRecord(array $data): int|false
    {
        foreach ($this->records as $key => $record) {
            if ((int)$record['id'] === (int)$data['id']) {
                $this->records[$key] = $data;
                return $this->insertRecord();
            }
        }
        return false;
    }

    public function deleteRecord(int $id){
        foreach ($this->records as $key => $record) {
            if ((int)$record['id'] === $id) {
                unset($this->records[$key]);
                return $this->insertRecord();
            }
        }
    }
    private function generateId(): int
    {
        $ids = array_column($this->records, 'id');
        return ($ids ? max($ids) : 0) + 1;
    }
    private function insertRecord():int|false{
        return $this->file->write(json_encode($this->records), true);
    }
}