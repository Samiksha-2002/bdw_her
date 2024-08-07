<?php

namespace App\Helper;
use Carbon\Carbon;


Class General
{

  /**
   * $file = request parameter
   * $path = the folder where you want to save
   * $oldPath = for edit record pass old image url, so it can be delete
   */
  public static function upload_image($file, $path = '', $oldPath = null)
  {

    if ($oldPath) {

      // remove url from oldPath
      $existingImagePath = str_replace(url('/'), '', $oldPath);

      // delete file if exit
      if (file_exists($existingImagePath)) {
        unlink($existingImagePath);
      }

    }
    
    // get extension
    $ext = $file->getClientOriginalExtension();

    // make new file name
    $filename = time().'.'.$ext;

    // store file to public folder
    $file->move($path, $filename);

    // path where image store
    $uploadPath = $path.'/'.$filename;

    // add url to path
    return url($uploadPath);
  }

  /**
   * $file = url fo the file to deelte
   */
  public static function remove_file($filePath)
{
    if ($filePath) {
        // Remove URL from filePath to get the relative path
        $existingFilePath = str_replace(url('/'), '', $filePath);

        // Construct the full path to the file
        $fullPath = public_path($existingFilePath);

        // Delete the file if it exists
        if (file_exists($fullPath)) {
            unlink($fullPath);
        }
    }
}


}