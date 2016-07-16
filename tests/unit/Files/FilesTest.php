<?php

namespace alunos\biblioteca\Tests\Unit\Files;

use alunos\biblioteca\Files\Csv\Csv;

class FilesTest extends \PHPUnit_Framework_TestCase
{
    public function testInstanceCsv()
    {
        $obj1 = new Csv;
        $obj2 = new Csv;
        $this->assertInstanceOf(get_class($obj1), $obj2);
     }
}