<?php
class Plugin_form extends Plugin {

  var $meta = array(
    'name'       => 'ZurbForm Plugin',
    'version'    => '0.1',
    'author'     => 'Max Stauss',
    'author_url' => 'http://maxx.st'
  );

  /**
   * returns a Form where you can login
   */
  public function index(){
    
  }


  private function _loginForm($return){

    $html = "{{ member:login return='".$return."' }}";
      $html .= '<input type="text" placeholder="Username" name="username" />';
      $html .= '<input type="password" placeholder="Password" name="password" />';
      $html .= '<input type="submit" class="button right" value="Login" />';
    $html .= "{{ /member:login }}";

    return $html;
  }

  public function modal_login(){
    $title      = "Please Login";
    $return     = $this->fetch_param('return', '{ page_url }');


    $btn = '<a href="#" data-reveal-id="loginModal" data-animation="fadeAndPop" data-animationspeed="300" data-closeonbackgroundclick="true" data-dismissmodalclass="close-reveal-modal">Login</a>';

    $div = '<div id="loginModal" class="reveal-modal small">';
      $div .= '<h2>'.$title.'</h2>';
      $div .= $this->_loginForm($return);
      $div .= '<a class="close-reveal-modal">&#215;</a>';
    $div .= "</div>";

    return array('button' => $btn, 'div' => $div);
  }

}