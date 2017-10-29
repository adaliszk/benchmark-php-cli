<?php
/*
 * Copyright (C) 2017 Ádám Liszkai <adaliszk@gmail.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */
 
namespace PHPBenchmark\Docker;

class File
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
