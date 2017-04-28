<?php
  function modify_comment_field( $fields ) {
    $commenter = wp_get_current_commenter();
    $req = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );

    $fields =  array(
      'author' =>
        '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
        '" size="30"' . $aria_req . ' placeholder="Nombre" class="form-control btn-lg"/>',
      'break1' => '<br>',

      'email' =>
        '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
        '" size="30"' . $aria_req . ' placeholder="Email" class="form-control btn-lg"/>',
      'break2'=> '<br>'
      );

    return $fields;
  }

  add_filter('comment_form_default_fields', 'modify_comment_field');
?>
