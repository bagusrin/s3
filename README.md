# s3
Manage Object Storage S3 Standart Amazon for PHP

## Usage

```php

use Bagusrin\S3\S3Client;

$s3 = new S3Client([
  'key' => 'KEY',
  'secreet' => 'SECREET'
  'region' => 'idn',
  'endpoint' => 'https://nos.jkt-1.neo.id' 
]);
                    
/** Upload file to S3 **/
$s3->uploadObject([
  'bucket' => 'perihal',
  'filepathName' => '020319/image.png',
  'file' => '/Users/admin/image.png'
]);
            
            
/** Delete file from S3 **/
$s3->deleteObject([
  'bucket' => 'perihal',
  'filepathName' => '020319/image.png'
]);
