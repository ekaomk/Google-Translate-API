# Unlimited Google Translate API

### What is "Unlimited Google Translate API"?
Google Translate API is language translation API use of "Google Translate", use with automatically get Google API key, that mean you can use with/without API key.
 

### How to use? view this sample.
```php
// Sample to translate English to Thai
$result = translate('en', 'th', 'Hello World');
```
### Result
```json
{
  "data": {
    "translations": [
      {
        "translatedText": "สวัสดีชาวโลก"
      }
    ]
  }
}
```
##### Wow! too easily? That all of this.
 
## Configuration

#### Use your own Google Translate API key
If your don't need to get API key automatically for get more translate speed.
You can modify config file for that, but remember, if you use you own API key, you will not has limited translate times.
 
##### In the "config.class.php" file, change "$useOwnAPIKey" to true and set your API key to "$apiKey" Like this
 
```php
  // If set $useOwnAPIKey to true, API will use your API Key instead automatically get api key ($apiKey variable)
  public static $useOwnAPIKey = true;
  // If your set $useOwnAPIKey to true, $apiKey is require
  public static $apiKey = 'YOUR-OWN-API-KEY';
```
