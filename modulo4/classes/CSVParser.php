<?php 
class CSVParser
{
    private $filename;
    private $separator;
    private $counter;
    private $data;
    private $header;

    public function __construct($filename, $separator = ',')
    {
        $this->filename = $filename;
        $this->separator = $separator;
        $this->counter = 1;
    }

    public function parse()
    {
        if(!file_exists($this->filename)){
            throw new Exception("probelmas, amigo");
        }
        $this->data = file($this->filename);
        $this->header = str_getcsv($this->data[0], $this->separator);
        return TRUE;
    }

    public function fetch()
    {
        if(isset($this->data[$this->counter]))
        {
            $row = str_getcsv($this->data[$this->counter ++], $this->separator);
            foreach($row as $key =>$value)
            {
                $row[$this->header[$key]] = $value;
            }
            return $row;
        }
    }
}