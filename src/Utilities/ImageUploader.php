<?php
namespace Cianflone\Again\Utilities;

use Image;
use \File;

class ImageUploader
{
    /**
     * [$path description]
     * @var [type]
     */
    private $path;

    /**
     * [$relativePath description]
     * @var [type]
     */
    private $relativePath;

    /**
     * [setImagePath description]
     * @param [type] $imgPath [description]
     */
    public function setImagePath($imgPath)
    {
        $this->path = public_path() .'/'. $imgPath;
        $this->relativePath = $imgPath;
        File::exists($this->path) or File::makeDirectory($this->path);
    }

    /**
     * [getImagePath description]
     * @return [type] [description]
     */
    public function getImagePath()
    {
        return $this->path;
    }

    /**
     * [doUpload description]
     * @param  [type] $file [description]
     * @return [type] [description]
     */
    public function doUpload($file)
    {
        $image = Image::make($file->getRealPath());

        $fileName = '/'. str_replace(' ', '-', strtolower($file->getClientOriginalName()));
        $filePath = $this->path . $fileName;

        $image->save($filePath);

        return '/'.$this->relativePath . $fileName;
    }
}
