<?php
namespace Fgsl\Test\Model;

use PHPUnit\Framework\TestCase;
use Laminas\View\Helper\HeadScript;

class ViewTest extends TestCase
{
    public function testView() 
    {
        $this->assertTrue(class_exists(HeadScript::class));        
    }
}
