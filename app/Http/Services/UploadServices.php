<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Log;

class UploadServices
{
    public function store($request)
    {
        try {
            //Kiểm tra file có tồn tại hay không
            if ($request->hasFile('files')) {
                //Tạo tên thư mục chứa file theo ngày
                $path = 'uploads/' . date("Y/m/d");

                //Đếm số lượng files khi multiple uploads
                $fileCount = count($request->file('files'));
                for ($i = 0; $i < $fileCount; $i++) {
                    //Lấy tên gốc của các file
                    $name[] = $request
                        ->file('files')[$i]
                        ->getClientOriginalName();

                    //Lưu file vào thư mục
                    $request->file('files')[$i]->storeAs(
                        'public/' . $path,
                        $name[$i]
                    );
                    $url[] = '/storage/' . $path . '/' . $name[$i];
                }
                return $url;
            }
        } catch (\Exception $error) {
            Log::error($error->getMessage());
            return false;
        }
    }
}
