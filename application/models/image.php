<?php 
class Image extends CI_model{
    function __construct() {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library("s3.php");
    }
    function add_image($product,$image)
    {
        $query = "INSERT INTO Images (product_id,name,url,picture_order,created_at,updated_at) VALUES(?,?,?,?,?,?)";
        $values = array($product["id"],$image["name"],$image["url"],$image["picture_order"],date("Y-m-d, H:i:s"),date("Y-m-d, H:i:s"));
        return $this->db->query($query,$values);
    
    }
    function add_image_to_cloud($file)
    {
        //BUCKET, ASSESS_KEY, PRIVATE_KEY are CONSTANTS set up in the config file
        $s3 = new S3(ACCESS_KEY, PRIVATE_KEY);
        $bucket = $s3->getBucket(BUCKET);
        // getting each file name from uploads/images
        $dir = "{$_SERVER['DOCUMENT_ROOT']}/uploads/images/";
        $files = array_diff(scandir($dir),array("..",".",".DS_Store"));
        //uploading each file in uploads/images
        $s3->putObject(
                        $s3->inputFile($file,false),
                        BUCKET,
                        $file,
                        S3::ACL_PUBLIC_READ,
                        array(),
                        array(),
                        S3::STORAGE_CLASS_RRS
                        );  
    }

    function get_image_from_cloud() 
    {
        $s3 = new S3(ACCESS_KEY, PRIVATE_KEY);
        $bucket = $s3->getBucket(BUCKET);  
        
        end($bucket);   //move the internal pointer to the end of the array
        $image = key($bucket); //get the key of the element by the internal pointer
        $image_url = "https://s3-us-west-2.amazonaws.com/".BUCKET."/".$image;
        return $image_url;
    }

    // upload file function
    public function do_upload()
    {
        $config['upload_path'] = "{$_SERVER['DOCUMENT_ROOT']}/uploads/images/";
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100000';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
        $config['overwrite'] = TRUE;
        $config['remove_spaces'] = TRUE;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload())
        {
            $error = array('error' => $this->upload->display_errors());
            var_dump($error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
        }
    }
}