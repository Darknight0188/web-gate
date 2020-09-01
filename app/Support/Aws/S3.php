<?php

namespace App\Support\Aws;

use Illuminate\Http\UploadedFile;

/**
 * S3
 *
 */
class S3
{

    /**
     * create file s3
     *
     * @param UploadedFile $file
     * @param string $folder
     * @param string $name
     * @return void
     */
    public function create(UploadedFile $file, string $key, string $contentType = null)
    {
        $options = [
            'visibility' => 'public',
        ];

        if ($contentType) {
            $options['ContentType'] = $contentType;
        }

        \Storage::disk('s3')->put($key, file_get_contents($file), $options);
    }

    /**
     * create file base64 s3
     *
     * @param UploadedFile $file
     * @param string $content
     * @param string $name
     * @return void
     */
    public function createRaw(string $content, string $key, string $contentType = null)
    {
        $options = [
            'visibility' => 'public',
        ];

        if ($contentType) {
            $options['ContentType'] = $contentType;
        }
        \Storage::disk('s3')->put($key, $content, $options);
    }

    /**
     * update file s3
     *
     * @param UploadedFile $file
     * @param string $folder
     * @param string $currentName
     * @param string $name
     * @return void
     */
    public function update(UploadedFile $file, string $key, string $currentName = null, string $contentType = null)
    {
        $options = [
            'visibility' => 'public',
        ];

        if ($contentType) {
            $options['ContentType'] = $contentType;
        }

        if ($currentName) {
            \Storage::disk('s3')->delete($currentName);
        }
        \Storage::disk('s3')->put($key, file_get_contents($file), $options);
    }

    /**
     * delete file s3
     *
     * @param string $name
     * @return void
     */
    public function delete(string $name)
    {
        \Storage::disk('s3')->delete($name);
    }

    /**
     * update file s3
     *
     * @param string $content
     * @param string $key
     * @param string $currentName
     * @return void
     */
    public function updateRaw(string $content, string $key, string $currentName)
    {
        \Storage::disk('s3')->delete($currentName);
        \Storage::disk('s3')->put($key, $content, 'public');
    }
}
