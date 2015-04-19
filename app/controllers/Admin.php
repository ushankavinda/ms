<?php

class Admin extends BaseController {
    
    public function update () {
        
        $product = new Product();
        $pro_items = new AccItems();

        
        $product->name = Input::get('mainName');
        $product->catergory = Input::get('type');
        $product->save();
        $id =  $product->id;
        
        
        $modelNo =  Input::get('modelNo');
        $modelName = Input::get('modelName');
        $imagePath = Input::get('image');

          
        foreach ($modelNo as $key => $value) {
            
            //file upload----------------------------------------------------
            $allowed_filetypes = array("jpeg", "jpg", "png");

            $temp = explode(".", $_FILES["image"]["name"][$key]);
            $extension = end($temp);

            $max_filesize = 500000;
            $upload_path = '_/images/products/';

            $filename = $_FILES["image"]["name"][$key];

            $filesize=$_FILES["image"]["size"][$key];

            if(!in_array($extension,$allowed_filetypes)){

                return "The image you attempted is invalid!";

            }elseif($filesize > $max_filesize || $filesize == 0){

              return "The image you attempted to upload is too large!";

            }elseif(file_exists($upload_path . $filename)) {

              return "The image alredy exists!";
            }
            else{
              //$succ_message = "Report upload success!"; 
                move_uploaded_file($_FILES['image']['tmp_name'][$key],$upload_path . $filename);
                $img = $upload_path . $filename;
                
                 $arrData[] = array(
                "product_id"=>$id,            
                "model_no"=>$modelNo[$key],
                "model_name"=>$modelName[$key],
                "img_path"=>$img);
                
            }

        }
        $pro_items::insert($arrData);
        
        return View::make('admin/index')->with('success', 'Update done successfuly.');
    }
    
}
