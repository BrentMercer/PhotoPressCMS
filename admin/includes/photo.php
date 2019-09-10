<?php

class Photo extends Db_object {

	protected static $db_table = "photos";
	protected static $db_table_fields = array( 'id', 'title', 'caption', 'description', 'filename', 'alternate_text', 'type', 'size' ); 
	public $id;
	public $title;
	public $caption;
	public $description;
	public $filename;
	public $alternate_text;
	public $type;
	public $size;

	public $tmp_name;
	public $upload_directory = "images";


	public function photo_path(){
		return $this->upload_directory . DS . $this->filename;
	}

	public function save(){
		if ($this->id) {
			$this->update();
		} else {
			if (!empty($this->errors)) {
				return false;
			}

			if (empty($this->filename) || empty($this->tmp_name)) {
				$this->errors[] = "The file was not available";
				return false;
			}

			$target_path = SITE_ROOT . DS . 'admin' . DS . $this->upload_directory . DS . $this->filename;

			if (file_exists($target_path)) {
				$this->errors[] = "The file {$this->filename} already exists.";
				return false;
			}

			if (move_uploaded_file($this->tmp_name, $target_path)) {
				if ($this->create()) {
					unset($this->tmp_name);
					return true;
				}
			} else {
				$this->erros[] = "The file directory probably does not have permission.";
				return false;
			}

			$this->create();
		}
	}

	public function delete_photo(){
		if ($this->delete()) {
			$target_path = SITE_ROOT . DS . 'admin' . DS . $this->photo_path();
			return unlink($target_path) ? true : false;
		} else {
			return false;
		}
	}



}
?>