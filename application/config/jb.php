<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Site Theme
|--------------------------------------------------------------------------
|
| Specify the name of the default site template view subfolder  
| application/modules/templates/views via using $config['jb_ttheme'] .
|  
| In the "regular" controller, call a view as follows:
|
|       $data['module'] = 'templates/NAME OF MODULE CONTAINING "REGULAR" HMVC CONTROLLER';
|       $data['view_file'] = 'NAME OF VIEW FILE IN HMVC MODULE';
|       echo Modules::run('templates', $data);
|
| To specify a different template to the one specified in this config file
| add the following before the last line of the above:
| 
|       $data['template'] = 'NAME OF THEME TO BE USED';
|
| Themes may have multiple views. Specify the default template file via $config['jb_default_template']
|
| Call a view using a template file other than the default by specifying 
| $data['template'] as follows:
|
|       $data['module'] = 'templates/NAME OF MODULE CONTAINING "REGULAR" HMVC CONTROLLER';
|       $data['view_file'] = 'NAME OF VIEW FILE IN HMVC MODULE';
|       $data['template_file'] = 'NAME OF ALTERNATIVE TEMPLATE FILE';
|       echo Modules::run('templates', $data);
|
| 
*/
$config['jb_template']	= 'jumbotron';



/*
|--------------------------------------------------------------------------
| Application Javascript
|--------------------------------------------------------------------------
|
| Specify the javascript that should always be included on all pages of the application
| 
| $config['jb_js_application'][] =  "https://code.jquery.com/jquery-2.1.3.min.js";
| 
*/

$config['jb_js_application'] =  array('https://code.jquery.com/jquery-2.1.3.min.js','https://ci3.0hmvc/_js/application/application.js'); 

/* End of file jb_theme.php */
/* Location: ./application/config/jb_theme.php */