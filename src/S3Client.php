<?php
namespace Bagusrin\S3;

/**
 * 3rd party for manage storage in S3 (Amazon Stsndart).
 *
 * @author Bagus Rinaldhi <bagusrinn@gmail.com>
 */

class S3Client{

    private $s3;

    
    public function __construct(array $param = []){

        $this->s3 = new \Aws\S3\S3Client([
            'region'  => $param['region'],
            'version' => 'latest',
            'endpoint' => $param['endpoint'],
            'credentials' => [
                'key'    => $param['key'],
                'secret' => $param['secret'],
            ]
        ]);
    }

    /**
     * Upload file to S3
     *
     * @param array $dt
     *
     * @return boolean
     */
    public function uploadObject(array $dt = []){

        $result = $this->s3->putObject([
            'Bucket' => $dt['bucket'], //=== perihal
            'Key'    => $dt['filepathName'], //=== 020319/image.png
            'SourceFile' => $dt['file'], //=== /Users/admin/image.png => file yg mau diupload
            'ContentType' => $dt['contentType'],
            'ACL' => 'public-read'
        ]);

        return $result;
    }


    /**
     * Delete file from S3
     *
     * @param array $dt
     *
     * @return array
     */
    public function deleteObject(array $dt = []){

        $result = $this->s3->deleteObject([
            'Bucket' => $dt['bucket'],
            'Key'    => $dt['filepathName']
        ]);

        return $result;
    }

}
