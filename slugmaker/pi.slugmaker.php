<?php
class Plugin_slugmaker extends Plugin
{

  var $meta = array(
    'name'       => 'Slugmaker',
    'version'    => '1.0',
    'author'     => 'Curtis Blackwell',
    'author_url' => 'http://curtisblackwell.com'
  );

  public function index()
  {
    $arr    = array($this->content);
    $return = Slug::make(Parse::template($this->content, $arr));

    if ($this->fetch('lower') == true) {
      $return = strtolower($return);
    }

    return $return;
  }

}
