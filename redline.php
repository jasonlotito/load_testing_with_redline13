<?php
/**
 * @return bool
 */
function isRedlineVerbose(){
  static $isVerbose;
  if($isVerbose === null){
    $isVerbose = (int) getenv( 'RED_HAMMER_VERBOSE' ) === 1;
  }
  return $isVerbose;
}
/**
 * @param int $timestamp
 * @param int $elapsedTime
 */
function recordPageTime( $timestamp, $elapsedTime )
{
  isRedlineVerbose() && output("Record Page Time: timestamp $timestamp; elapsed time: $elapsedTime");
}
/**
 * @param string $url
 * @param int $timestamp
 * @param int $elapsedTime
 */
function recordURLPageLoad( $url, $timestamp, $elapsedTime )
{
  output( "$url -> $elapsedTime seconds" );
}
/**
 * @param int $kilobytes
 */
function recordDownloadSize( $kilobytes )
{
  isRedlineVerbose() && output(sprintf("Download Size: %dkb", $kilobytes));
}
/**
 * @param string $error
 */
function recordError( $error )
{
  output( "Error: $error" );
}
/**
 * @param string $msg
 * @return bool
 */
function output($msg){
  echo sprintf("[%s] %s]\n", getmypid(), $msg);
  return true;
}
