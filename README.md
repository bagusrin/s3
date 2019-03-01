# s3
Manage Object Storage S3 Standart Amazon for PHP

## Usage

```php

use Bagusrin\S3\S3Client;

$client = new S3Client([
  'key' => 'KEY',
  'secreet' => 'SECREET'
  'region' => 'idn',
  'endpoint' => 'https://nos.jkt-1.neo.id' 
]);
                    
/** Upload file to S3 **/
$client->uploadObject([
  'bucket' => 'perihal',
  'filepathName' => '020319/image.png',
  'file' => '/Users/admin/image.png'
]);
            
            
/** Delete file from S3 **/
$client->deleteObject([
  'bucket' => 'perihal',
  'filepathName' => '020319/image.png'
]);
