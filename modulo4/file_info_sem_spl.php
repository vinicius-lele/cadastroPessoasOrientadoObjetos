<?php
class MeuArquivo
{
    private $path;
    public function __construct($path)
    {
        $this->path = $path;
    }

    public function getContents()
    {
        return file_get_contents($this->path);
    }

    public function getExtension()
    {
        return pathinfo($this->path, PATHINFO_EXTENSION);
    }
}

$file = new MeuArquivo('file_info_sem_spl.php');
print $file->getExtension();
print ' - ';
print $file->getContents();