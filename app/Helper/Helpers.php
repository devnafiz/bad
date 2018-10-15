<?php
namespace App\Helper;
use DB;

use Session;

class Helpers{

	//return translation
	if ( ! function_exists('lang_check_exists'))
	{
		function lang_check_exists($word){
			//$CI=& get_instance();
			//$CI->load->database();
			$result = $this->db->get_where('language',array('word'=>$word));
			if($result->num_rows() > 0){
				return 1;
			} else {
				return 0;
			}
		}
	}
	//check and add to db
	if ( ! function_exists('add_lang_word'))
	{
		function add_lang_word($word){
			//$CI=& get_instance();
			//$CI->load->database();
			$data['word'] = $word;
			$data['english'] = ucwords(str_replace('_', ' ', $word));
			$this->db->insert('language',$data);
		}
	}


	//add language
	if ( ! function_exists('add_language'))
	{
		function add_language($language){
			//$CI=& get_instance();
			//$CI->load->database();
			//$CI->load->dbforge();
			$language = str_replace(' ', '_', $language);
			$fields = array(
		        $language => array('type' => 'LONGTEXT','collation' => 'utf8_bin','null' => TRUE,'default' => NULL)
			);
			$this->dbforge->add_column('language', $fields);
		}
	}

	//insert language wise 
	if ( ! function_exists('add_translation'))
	{
		function add_translation($word,$language,$translation){
			//$CI=& get_instance();
			//$CI->load->database();
			$data[$language] = $translation;
			$this->db->where('word',$word);
			$this->db->update('language',$data);
		}
	}


	//return translation
	if ( ! function_exists('translate'))
	{
		function translate($word){
			//$CI=& get_instance();
			//$CI->load->database();
			if($set_lang = Session::userdata('language')){} else {
				$set_lang = $this->db->get_where('general_settings',array('type'=>'language'))->row()->value;
			}
			$return = '';
			$result = $this->db->get_where('language',array('word'=>$word));
			if($result->num_rows() > 0){
				if($result->row()->$set_lang !== NULL && $result->row()->$set_lang !== ''){
					$return = $result->row()->$set_lang;
					$lang = $set_lang;
				} else {
					$return = $result->row()->english;
					$lang = 'english';
				}
				$id = $result->row()->word_id;
			} else {
				$data['word'] = $word;
				$data['english'] = ucwords(str_replace('_', ' ', $word));
				DB::insert('language',$data);
				$id = $CI->db->insert_id();
				$return = ucwords(str_replace('_', ' ', $word));
				$lang = 'english';
			}
			return $return;
		}
}

?>
