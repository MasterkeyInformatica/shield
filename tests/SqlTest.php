<?php namespace Masterkey\Shield;

    use PHPUnit_Framework_TestCase;

    class SqlTest extends PHPUnit_Framework_TestCase
    {
        public function testClear()
        {
            $this->assertEquals('Olá', Sql::clear('Oláwhere1=1'));
            $this->assertEquals('Busca', Sql::clear('Busca '));
            $this->assertEquals('Sem Tags', Sql::clear('<p>Sem Tags</p>'));
            $this->assertEquals('', Sql::clear());
        }
    }
