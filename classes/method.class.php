<?php
class method extends database
{
    public $fileuploaderror;
    public function uploadFile($file, $storagefolderpath, $filename = null, $allowed_ext = ['png', 'jpeg', 'jpg', 'gif'])
    {
        $temp_file_path = $file['tmp_name'];
        $fileerror = $file['error'];
        $filetype = $file['type'];
        $file_name_plus_ext = $file['name'];
        $filesize = $file['size'];
        $ext = explode('.', $file_name_plus_ext);
        if ($fileerror != 0) {
            $this->fileuploaderror = 'An error occured while uploading your file error code = ' . $fileerror;
        } else {
            if (!in_array(strtolower($ext[1]), $allowed_ext)) {
                $this->fileuploaderror = 'Error invalid file detected please upload a valid file';
            } else {
            }
            $newfilepath = 'asset/' . $storagefolderpath . '/' . $filename . '.' . $ext[1];
            if (file_exists($newfilepath)) {
                unlink($newfilepath);
                if (move_uploaded_file($temp_file_path, $newfilepath)) {
                    return $newfilepath;
                }
            } else {
                if (move_uploaded_file($temp_file_path, $newfilepath)) {
                    return $newfilepath;
                }
            }
        }
    }

    public function getusers ($id){
        $sql = "SELECT * FROM tbl_users  WHERE id !='$id' order by online_status DESC";
        $result = $this->connect()->query($sql);
        $result = $result->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }  public function getuser ($id){
        $sql = "SELECT * FROM tbl_users  WHERE id ='$id'";
        $result = $this->connect()->query($sql);
        $result = $result->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}
