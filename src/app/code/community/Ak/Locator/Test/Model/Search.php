<?php

class Ak_Locator_Test_Model_Search extends EcomDev_PHPUnit_Test_Case
{
    /**
     * @var Ak_Locator_Model_Search
     */
    protected $_model;

    /**
     * Set up test class
     */
    protected function setUp()
    {
        parent::setUp();
        $this->_model = Mage::getModel('ak_locator/search');
    }

    /**
     * @test
     */
    public function testInstance()
    {
        $this->assertInstanceOf('Ak_Locator_Model_Search', $this->_model);
    }


    /**
     * @test
     */
    public function testStringSearchResultInstance()
    {
        $params = array('s' => '3141 australia');
        $this->assertInstanceOf('Ak_Locator_Model_Resource_Location_Collection', $this->_model->search($params));
    }

     /**
      * @test
      */
    public function testLatLongSearchResultInstance()
    {
        $params = array('lat'=>'-37.81420740.0000', 'long'=>'144.964045100000');
        $this->assertInstanceOf('Ak_Locator_Model_Resource_Location_Collection', $this->_model->search($params));

    }

    /**
     * @test
     */
    public function testPointSearchResultInstance()
    {
        $params = array('point'=> new Point(-37.814207400000, 144.964045100000));
        $this->assertInstanceOf('Ak_Locator_Model_Resource_Location_Collection', $this->_model->search($params));
    }

}
