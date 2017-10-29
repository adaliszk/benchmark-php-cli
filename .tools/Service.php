<?php
namespace PHPBenchmark;

class Service
{
	private $file;
	private $rows = [];

	private $from = 'skratch';
	private $expose = [];
	private $command;

	public function __construct(string $fileName)
	{
		$this->file = new SplFileInfo($fileName);
		$this->parse($this->file->getPathname());
	}
	
	public function parse(string $pathName)
	{
		//echo "Parsing file: $pathName..." . PHP_EOL;
	
		$content = file_get_contents($pathName);
		$rows = explode("\n", $content);
		
		foreach ($rows as $rowContent)
		{
			// Skipping row if...
			if (empty(trim($rowContent))) continue; // the row empty
			if (strpos(trim($rowContent),'#') === 0) continue; // when it's a comment
			
			//echo "parse: $rowContent" . PHP_EOL;
			
			$row = new Row($rowContent);
			//echo print_r($row);
			
			$this->rows[] = $row;
			
			if ($row->type == 'FROM') $this->from = $row->content;
			if ($row->type == 'EXPOSE') $this->expose = array_merge($this->expose, $row->content);
			if ($row->type == 'CMD') $this->command = implode(' ', $row->content);			
		}
	}
	
	public function __get($name)
	{
		// It will throw an error if it's not exists
		return $this->$name;
	}
}
