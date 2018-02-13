<?php 

function charity_buttons_form_submit($form, &$form_state){
    $values = $form_state['values'];
}

function charity_form_system_theme_settings_alter(&$form, &$form_state) {
	
    // Default path for image
     $bg_path = theme_get_setting('bg_path');
     if (file_uri_scheme($bg_path) == 'public') {
       $bg_path = file_uri_target($bg_path);
     }
     
    // Logo Toggle
    $form['options']['header']['branding']['branding_type'] = array(
      '#type' => 'select',
      '#title' => 'Branding Type',
      '#default_value' => theme_get_setting('branding_type'),
      '#options' => array(
        'logo' => 'Logo',
        'text' => 'Text',
      ),
    );

    $form['options']['header']['branding']['bg_path'] = array(
      '#type' => 'textfield',
      '#title' => 'Path to logo',
      '#default_value' => $bg_path,
      '#disabled' => TRUE,
      '#states' => array(
        'visible' => array('#edit-branding-type' => array('value' => 'logo')),
      ), 
    );

    $form['options']['header']['branding']['bg_upload'] = array(
      '#type' => 'file',
      '#title' => 'Upload logo',
      '#description' => 'Upload a new logo image.',
      '#states' => array(
        'visible' => array('#edit-branding-type' => array('value' => 'logo')),
      ), 
    );
	
	  $form['#submit'][] = 'opencharity_settings_submit';
	
}

function opencharity_settings_submit($form, &$form_state) {
  // Get the previous value
  $previous = 'public://' . $form['options']['header']['branding']['bg_path']['#default_value'] ;
  
  $file = file_save_upload('bg_upload');
  if ($file) {
    $parts = pathinfo($file->filename);
    $destination = 'public://' . $parts['basename'];
    $file->status = FILE_STATUS_PERMANENT;
    
    if(file_copy($file, $destination, FILE_EXISTS_REPLACE)) {
      $_POST['bg_path'] = $form_state['values']['bg_path'] = $destination;
      if ($destination != $previous) {
        return;
      }
    }
  } else {
    // Avoid error when the form is submitted without specifying a new image
    $_POST['bg_path'] = $form_state['values']['bg_path'] = $previous;
  }

} 

