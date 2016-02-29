<?php
abstract class LoadTestingTest
{
  /**
   * @var Session
   */
  protected $session;
  /**
   * @var boolean
   */
  protected $verbose;
  /**
   * @var array
   */
  protected $iniSettings;
  public function __construct( $testNum, $rand, $resourceUrl = null ){}
  abstract public function startTest();
  public function enableResourceLoading(){}
  public function disableResourceLoading(){}
  public function setDelay( $minDelayMs, $maxDelayMs ){}
  public function setIniSettings( array $iniSettings ){}
  public function verbose(){}
  public function nonVerbose(){}
}