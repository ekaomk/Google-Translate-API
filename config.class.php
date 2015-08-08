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
* Config Class
*
* @package    Unlimited Google Translate API
* @author     Ekachai Omkaew <ekaomk@gmail.com>
* @copyright  1997-2015 Ekachai Omkaew
* @license    GNU General Public License (GNU GPL or GPL): http://www.gnu.org/licenses/
*/

class config {
  // If set $useOwnAPIKey to true, API will use your API Key instead automatically get api key ($apiKey variable)
  public static $useOwnAPIKey = false;
  // If your set $useOwnAPIKey to true, $apiKey is require
  public static $apiKey = '';

  /* START DO NOT MODIFY SECTION */
  public static $googleCloudBaseScriptMinURL = 'https://cloud.google.com/js/base.min.js';
  public static $googleTranslateAPIURL = 'https://www.googleapis.com/language/translate/v2';
  public static $apiKeyPattern = "/this\.apiKey=\"(.+?)\"/";
  /* END DO NOT MODIFY SECTION */
}
?>
