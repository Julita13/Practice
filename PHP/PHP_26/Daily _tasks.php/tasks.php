/*

1. Sukurti klasę File

2. Į konstruktorių paduoti kelią iki failo, kuris bus saugomas savybėj $filePath

3. Parašykite metodą getFileContents, kuris paima failo turinį. Jei failas neegzistuoja,
metamas Exception. Jei egzistuoja, grąžinamas jo turinys.

4. Parašykite metodą createFile. Jei failas egzistuoja, metama išlyga Exception.Jei neegzistuoja,
sukuriamas failas su touch() metodu.

5. Parašykite metodą writeToFile. Metodas priima tekstą įrašymui string $content ir bool $overwrite = false. 
        Patikrinama: 
        Ar failas egzistuoja 
        Ar failas turi turinį
        Ar nustatyta overwrite
        
        Jei failas egzistuoja ir turi turinį, bet overwrite yra false, metamas exception, kad negalim perrašyti.

        Jei turinys tuščias arba  overwrite true, atliekamas įrašymas. 
*/

// Visi metodai išbandomi try catch bloke

class File
{
    public function __construct(private string $filePath)
    {
    }

    public function exists()
    {
        return file_exists($this->filePath);
    }

    public function getFileContents(): string
    {
        if (!$this->exists()) {
            throw new \Exception('Failas neegzistuoja');
        }

        return file_get_contents($this->filePath);
    }

    public function createFile(): bool
    {
        if ($this->exists()) {
            throw new \Exception('Failas jau egzistuoja');
        }

        return touch($this->filePath);
    }

    public function writeToFile(string $text, bool $overwrite = false)
    {
        if ($this->getFileContents() && !$overwrite) {
            throw new \Exception('Failo turinys ne tuščias');
        }

        return file_put_contents($this->filePath, $text);
    }
}

try {
    $testas = new File(__DIR__ . "\\testas.txt");
    $testas->getFileContents();
    echo 'OK';
} catch (\Exception $e) {
    echo $e->getMessage();
}