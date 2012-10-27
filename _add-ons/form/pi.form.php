<?php
class Plugin_form extends Plugin {

  var $meta = array(
    'name'       => 'ZurbForm Plugin',
    'version'    => '0.1',
    'author'     => 'Max Stauss',
    'author_url' => 'http://maxx.st'
  );

  private function _loginForm($return='/', $title="Please Login"){

    $html = '<form class="" method="post" action="/TRIGGER/member/login">';
      $html .= '<input type="hidden" name="return" value="'.$return.'">';
      $html .= '<header class="row">';
        $html .= '<div class="twelve columns">';
          $html .= '<h1>'.$title.'</h1>';
          $html .= '<hr>';
        $html .= '</div>';
      $html .= '</header>';
      $html .= '<div class="row">';
        $html .= '<div class="three columns">';
          $html .= '<label for="loginuser" class="right inline">Username</label>';
        $html .= '</div>';
        $html .= '<div class="nine columns">';
          $html .= '<input id="loginuser" type="text" placeholder="username" class="">';
        $html .= '</div>';
      $html .= '</div>';
      $html .= '<div class="row">';
        $html .= '<div class="three columns">';
          $html .= '<label for="loginpass" class="right inline">Password</label>';
        $html .= '</div>';
        $html .= '<div class="nine columns">';
          $html .= '<input id="loginpass" type="text" placeholder="******">'; 
        $html .= '</div>';
      $html .= '</div>';
      $html .= '<footer class="row">';
        $html .= '<div class="twelve columns">';
          $html .= '<input type="submit" class="button expand" value="Login">';
        $html .= '</div>';
      $html .= '</footer>';
    $html .= '</form>';

    return $html;
  }

  public function modal_login(){
    
    $return     = $this->fetch_param('return', '{ page_url }');


    $btn = '<a href="#" data-reveal-id="loginModal" data-animation="fadeAndPop" data-animationspeed="300" data-closeonbackgroundclick="true" data-dismissmodalclass="close-reveal-modal">Login</a>';

    $div = '<div id="loginModal" class="reveal-modal small">';
      $div .= $this->_loginForm($return);
    $div .= "</div>";

    return array('button' => $btn, 'div' => $div);
  }

}