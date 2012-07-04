<?php 
  require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php'; 
  require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php'; 
  require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php'; 
  require_once PATH_TRUNK . 'gulliver/system/class.httpProxyController.php'; 

  /** 
   * Generated by ProcessMaker Test Unit Generator on 2012-05-10 at 20:39:58.
  */ 

  class classHttpProxyControllerTest extends PHPUnit_Framework_TestCase 
  { 
    /**
    * @covers HttpProxyController::__set
    * @todo   Implement test__set().
    */
    public function test__set() 
    { 
        if (class_exists('HttpProxyController')) {
             $methods = get_class_methods( 'HttpProxyController');
            $this->assertTrue( in_array( '__set', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers HttpProxyController::__get
    * @todo   Implement test__get().
    */
    public function test__get() 
    { 
        if (class_exists('HttpProxyController')) {
             $methods = get_class_methods( 'HttpProxyController');
            $this->assertTrue( in_array( '__get', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers HttpProxyController::__isset
    * @todo   Implement test__isset().
    */
    public function test__isset() 
    { 
        if (class_exists('HttpProxyController')) {
             $methods = get_class_methods( 'HttpProxyController');
            $this->assertTrue( in_array( '__isset', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers HttpProxyController::__unset
    * @todo   Implement test__unset().
    */
    public function test__unset() 
    { 
        if (class_exists('HttpProxyController')) {
             $methods = get_class_methods( 'HttpProxyController');
            $this->assertTrue( in_array( '__unset', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers HttpProxyController::call
    * @todo   Implement testcall().
    */
    public function testcall() 
    { 
        if (class_exists('HttpProxyController')) {
             $methods = get_class_methods( 'HttpProxyController');
            $this->assertTrue( in_array( 'call', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers HttpProxyController::setHttpRequestData
    * @todo   Implement testsetHttpRequestData().
    */
    public function testsetHttpRequestData() 
    { 
        if (class_exists('HttpProxyController')) {
             $methods = get_class_methods( 'HttpProxyController');
            $this->assertTrue( in_array( 'setHttpRequestData', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers HttpProxyController::setJsonResponse
    * @todo   Implement testsetJsonResponse().
    */
    public function testsetJsonResponse() 
    { 
        if (class_exists('HttpProxyController')) {
             $methods = get_class_methods( 'HttpProxyController');
            $this->assertTrue( in_array( 'setJsonResponse', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers HttpProxyController::setSendResponse
    * @todo   Implement testsetSendResponse().
    */
    public function testsetSendResponse() 
    { 
        if (class_exists('HttpProxyController')) {
             $methods = get_class_methods( 'HttpProxyController');
            $this->assertTrue( in_array( 'setSendResponse', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

  } 