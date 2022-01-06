<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;
trait StorageImageTrait
{
    public function storageTraitUpload($request, $feildName, $folderName)
    {
        if ($request->hasFile($feildName)) {
            $file = $request->$feildName;
            $fileNameOrigin = $file->getClientOriginalName();
            $fileNameHash = str_random(20) . '.' . $file->getClientOriginalExtension();
            $filePath = $request->file($feildName)->storeAs('public/' . $folderName . '/' . auth()->id(), $fileNameHash);
            $dataInsertTrait = [
                'file_name' => $fileNameOrigin,
                'file_path' => Storage::url($filePath)
            ];
            return  $dataInsertTrait;
        }
        return null;
    }
    public function storageTraitUploadMultiple($file, $folderName)
    {

        $fileNameOrigin = $file->getClientOriginalName();
        $fileNameHash = str_random(20) . '.' . $file->getClientOriginalExtension();
        $filePath = $file->storeAs('public/' . $folderName . '/' . auth()->id(), $fileNameHash);
        $dataInsertTrait = [
            'file_name' => $fileNameOrigin,
            'file_path' => Storage::url($filePath)
        ];
        return $dataInsertTrait;
    }
}
