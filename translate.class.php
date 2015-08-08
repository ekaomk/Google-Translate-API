<?php
/**
* Unlimited Google Translate API is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version,
* and distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* Translation Class
*
* @package    Unlimited Google Translate API
* @author     Ekachai Omkaew <ekaomk@gmail.com>
* @copyright  1997-2015 Ekachai Omkaew
* @license    GNU General Public License (GNU GPL or GPL): http://www.gnu.org/licenses/
*/

require_once('config.class.php');

// Automatically get google API key
function getGoogleAPIKey(){
  $rawScript = file_get_contents(config::$googleCloudBaseScriptMinURL);
  preg_match(config::$apiKeyPattern, $rawScript, $output_array);
  return $output_array[1];
}

// Translate function
function translate($from, $to, $word){
  $apiKey = (config::$useOwnAPIKey ? config::$apiKey : getGoogleAPIKey());
  $googleTranslateAPIURL = config::$googleTranslateAPIURL;
  $word = urlencode($word);
  $url = "$googleTranslateAPIURL?key=$apiKey&source=$from&target=$to&q=$word";
  $response = file_get_contents_ssl($url);
  return json_decode($response);
}

// Use to send translate to google
function file_get_contents_ssl($url) {
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_REFERER, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  $result = curl_exec($ch);
  curl_close($ch);
  return $result;
}

?>
