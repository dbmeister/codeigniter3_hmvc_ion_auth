<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function templates_js($application, $template, $module, $other)
{
  
  $html = '';

    if (isset($application))
    {
      $html = $html.'
        
        <!-- application -->';
      foreach ($application as $value)
      {
        $html = $html.'
          <script src="'.$value.'"></script>';
      }
    }
    
    if (isset($template))
    {
      $html = $html.'
        
        <!-- template -->';
      foreach ($template as $value)
      {
        $html = $html.'
          <script src="'.$value.'"></script>';
      }
    }
    
    if (isset($module))
    {
      $html = $html.'
        
        <!-- module -->';
      foreach ($module as $value)
      {
        $html = $html.'
          <script src="'.$value.'"></script>';
      }
    }
    
    if (isset($other))
    {
      $html = $html.'
        
        <!-- other -->';
      foreach ($other as $value)
      {
        $html = $html.'
          <script src="'.$value.'"></script>';
      }
    }
    
    return $html;
}