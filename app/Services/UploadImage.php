<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Intervention\Image\ImageManager as Image;

class UploadImage {

    private $image;
    private $path;

    public function __construct(UploadedFile $image, string $path)
    {
        $this->image = $image;
        $this->path = $path;
    }

    public function upload():bool
    {
        $image = new Image();
        try {
            $status = $image->make($this->image->getPathname())
                ->resize(400, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->encode('jpg', 75)
                ->save($this->path . '.jpg');

        } catch (\Exception $e) {
            return false;
        }
        return true;
    }
}