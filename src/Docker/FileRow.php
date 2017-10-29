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

class FileRow
{
	private $raw;
	private $type;
	private $content;
	
	public function __construct(string $rawContent)
	{
		$this->raw = trim($rawContent);
		$this->type = strtok($this->raw, " ");
		$this->content = substr($this->raw, strlen($this->type)+1);
		
		switch($this->type)
		{
			case "FROM":
					$this->content = $this->content;
				break;
		
			case "EXPOSE":
					$this->content = explode(' ', $this->content);
				break;
			
			case "CMD":
					$this->content = json_decode($this->content);
				break;
			
			default:
					// Do nothing...
				break;
		}
	}
	
	public function __toString(): string
	{
		return $this->raw;
	}
	
	public function __get($name)
	{
		// It will throw an error if it's not exists
		return $this->$name;
	}
}
