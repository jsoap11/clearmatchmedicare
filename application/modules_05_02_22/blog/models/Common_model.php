<?php
/**
*
*/
class Common_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}
	function InsertData($table,$Data)
	{
		$Insert = $this->db->insert($table,$Data);
		if ($Insert):
		return true;
		endif;
	}
	function getAllData($table,$specific='',$row='',$Where='',$order='',$limit='',$groupBy='',$like = '')
	{
		// If Condition
		if (!empty($Where)):
		$this->db->where($Where);
		endif;
		// If Specific Columns are require
		if (!empty($specific)):
		$this->db->select($specific);
		else:
		$this->db->select('*');
		endif;

		if (!empty($groupBy)):
		$this->db->group_by($groupBy);
		endif;
		// if Order
		if (!empty($order)):
		$this->db->order_by($order);
		endif;
		// if limit
		if (!empty($limit)):
		$this->db->limit($limit);
		endif;

		//if like
		if(!empty($like)):
		$this->db->like($like);
		endif;	
		// get Data

		//if select row
		if(!empty($row)):
		$GetData = $this->db->get($table);
		return $GetData->row();
		else:
		$GetData = $this->db->get($table);
		return $GetData->result();
		endif;	
	}
	function UpdateDB($table,$Where,$Data)
	{
		$this->db->where($Where);
		$Update = $this->db->update($table,$Data);
		if ($Update):
		return true;
		else:
		return false;
		endif;
	}
	function Authentication($table,$data)
	{
		$this->db->where($data);
		$query = $this->db->get($table);
		if ($query) {
			return $query->row();
		}
		else
		{
			return false;
		}
	}

	function DJoin($field,$tbl,$jointbl1,$Joinone,$row='',$jointbl3='',$Where='',$order='',$groupy = '',$limit = '',$query = '')
	{
		$this->db->select($field);
		$this->db->from($tbl);
		$this->db->join($jointbl1,$Joinone);
		if (!empty($jointbl3)):
		foreach ($jointbl3 as $Table => $On):
		$this->db->join($Table,$On);
		endforeach;
		endif;
		// if Group
		if (!empty($groupy)):
		$this->db->group_by($groupy);
		endif;
		if(!empty($order)):
		$this->db->order_by($order);
		endif;
		if(!empty($Where)):
		$this->db->where($Where);
		endif;
		if(!empty($limit)):
		$this->db->limit($limit);
		endif;

		if(!empty($query)):
		$this->db->like($like, $query);
		endif;

		if(!empty($row)):
		$query = $this->db->get();
		return $query->row();
		else:
		$query=$this->db->get();
		return $query->result();
		endif;	    

	}
	function DeleteDB($table,$where)
	{
		$this->db->where($where);
		$done = $this->db->delete($table);
		if ($done) {
			return true;
		}
		else
		{
			return false;
		}
	}

	function Encode_html($str) {
		return trim(stripslashes(htmlentities($str)));
	}

	function Encode($str) {
		return trim(  htmlentities( $str, ENT_QUOTES ) ) ;
	}

	function Decode($str) {
		return html_entity_decode(stripslashes($str));
	}

	function Encrypt($password) {
		return crypt(md5($password), md5($password));
	}


	public function socail_login($data,$username,$email,$table)
	{
		$this->db->where('email',$email);
		$this->db->limit(1);
		$users = $this->db->count_all_results($table);

		if(!isset($users) || $users < 1)
		{
			$this->load->helper('string');

			$password = random_string('alnum',10); // we create a random password for the user...

			$register_id = $this->ion_auth->register($username,$password,$email,$data,array('2'));

			// pr($register_id);die();

			if($register_id)
			{
				$this->ion_auth->activate($register_id);
				$this->ion_auth->login($email,$password, TRUE);
			}
		}
		else
		{
			$user = $this->db->where(array('email'=>$email))->limit(1)->get($table)->row();

			$sess_data = array('identity' => $user->username, 
							   'username' => $user->username,
							   'email'    => $user->email,
							   'user_id'  => $user->id,
							   'old_last_login' => $user->last_login);

			$this->session->set_userdata($sess_data);
		}
		return TRUE;
	}

	public function first_category_posts($catId) 
	{
		$this->db->distinct();
		$this->db->select("blog_post.*,users.first_name,users.last_name,blog_categories.cat_name,blog_categories.slug AS cat_slug");
		$this->db->from("blog_post");
		$this->db->join("users","users.id=blog_post.author_id");
		$this->db->join("blog_categories","blog_categories.id=blog_post.primary_cat_id");
		$this->db->order_by("blog_post.id","desc");
		$this->db->where('blog_post.deleted_at ', "Null");
		$this->db->where('blog_post.status ', 1);
		$this->db->where('blog_post.type ', 0);
		$this->db->where('blog_post.is_cat_first', '1');
		$this->db->where('blog_post.primary_cat_id', $catId);

		$query = $this->db->get();

		if ($query->num_rows() > 0) 
		{
			foreach ($query->result() as $row) 
			{
				$data[] = $row;
			}
			return $data;
		}
		return array();
	}

	public function fetch_first_posts($limit, $start,$idArr=array() ) 
	{
		$this->db->distinct();
		$this->db->select("blog_post.*,users.first_name,users.last_name,blog_categories.cat_name,blog_categories.slug AS cat_slug");
		$this->db->from("blog_post");
		$this->db->join("users","users.id=blog_post.author_id");
		$this->db->join("category_map","blog_post.id=category_map.post_id");
		$this->db->join("blog_categories","blog_categories.id=category_map.cat_id");

		$this->db->limit($limit, $start);
		$this->db->order_by("blog_post.id","desc");
		$this->db->where('blog_post.deleted_at ', "Null");
		$this->db->where('blog_post.status ', 1);
		$this->db->where('blog_post.type ', 0);
		$this->db->where('blog_post.is_cat_first', '1');
		if(count($idArr)>0){
			$this->db->where_in('blog_post.id ', $idArr);
		}
		$query = $this->db->get();

		if ($query->num_rows() > 0) 
		{
			foreach ($query->result() as $row) 
			{
				$data[] = $row;
			}
			return $data;
		}
		return array();
	}

	public function fetch_posts_blog_first() 
	{
		$this->db->distinct();
		$this->db->select("blog_post.*,users.first_name,users.last_name,blog_categories.cat_name,blog_categories.slug AS cat_slug");
		$this->db->from("blog_post");
		$this->db->join("users","users.id=blog_post.author_id");
		$this->db->join("blog_categories","blog_categories.id=blog_post.primary_cat_id");
		$this->db->order_by("blog_post.id","desc");
		$this->db->where('blog_post.deleted_at ', "Null");
		$this->db->where('blog_post.status ', 1);
		$this->db->where('blog_post.type ', 0);
		$this->db->where('blog_post.is_blog_first', '1');

		$query = $this->db->get();

		if ($query->num_rows() > 0) 
		{
			foreach ($query->result() as $row) 
			{
				$data[] = $row;
			}
			return $data;
		}
		return array();
	}

	public function common_blog($limit, $start) 
	{
		$this->db->distinct();
		$this->db->select("blog_post.*,users.first_name,users.last_name,blog_categories.cat_name,blog_categories.slug AS cat_slug");
		$this->db->from("blog_post");
		$this->db->join("users","users.id=blog_post.author_id");
		$this->db->join("blog_categories","blog_categories.id=blog_post.primary_cat_id");

		$this->db->limit($limit, $start);
		//$this->db->order_by("blog_post.id","desc");
		$this->db->where('blog_post.deleted_at ', "Null");
		$this->db->where('blog_post.status ', 1);
		$this->db->where('blog_post.type ', 0);
		$this->db->where('blog_post.is_blog_first', '0');
		$this->db->order_by("blog_post.ordering", 'DESC');
		$query = $this->db->get();

		if ($query->num_rows() > 0) 
		{
			foreach ($query->result() as $row) 
			{
				$data[] = $row;
			}
			return $data;
		}
		return array();
	}

	public function fetch_posts_blog($limit, $start,$idArr=array() ) 
	{
		$this->db->distinct();
		$this->db->select("blog_post.*,users.first_name,users.last_name,blog_categories.cat_name,blog_categories.slug AS cat_slug");
		$this->db->from("blog_post");
		$this->db->join("users","users.id=blog_post.author_id");
		$this->db->join("category_map","blog_post.id=category_map.post_id");
		$this->db->join("blog_categories","blog_categories.id=category_map.cat_id");

		$this->db->limit($limit, $start);
		$this->db->order_by("blog_post.id","desc");
		$this->db->where('blog_post.deleted_at ', "Null");
		$this->db->where('blog_post.status ', 1);
		$this->db->where('blog_post.type ', 0);
		$this->db->where('blog_post.is_blog_first', '0');
		if(count($idArr)>0){
			$this->db->where_in('blog_post.id ', $idArr);
		}
		$query = $this->db->get();

		if ($query->num_rows() > 0) 
		{
			foreach ($query->result() as $row) 
			{
				$data[] = $row;
			}
			return $data;
		}
		return array();
	}
	
		public function count_sub_categorywise_posts($idArr=array() ) 
		{
		$this->db->distinct();
		$this->db->select("blog_post.*,users.first_name,users.last_name,blog_categories.cat_name,blog_categories.slug AS cat_slug");
		$this->db->from("blog_post");
		$this->db->join("users","users.id=blog_post.author_id");
		$this->db->join("blog_categories","blog_categories.id=blog_post.primary_cat_id"); 
		$this->db->where('blog_post.deleted_at ', "Null");
		$this->db->where('blog_post.status ', 1);
		$this->db->where('blog_post.type ', 0);
		$this->db->where_in('blog_post.id ', $idArr);
		$this->db->order_by("blog_post.id ","desc");
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function fetch_sub_categorywise_posts($limit, $start,$idArr=array() ) 
		{
		$this->db->distinct();
		$this->db->select("blog_post.*,users.first_name,users.last_name,blog_categories.cat_name,blog_categories.slug AS cat_slug");
		$this->db->from("blog_post");
		$this->db->join("users","users.id=blog_post.author_id");
		$this->db->join("blog_categories","blog_categories.id=blog_post.primary_cat_id"); 
		$this->db->limit($limit, $start);
		$this->db->where('blog_post.deleted_at ', "Null");
		$this->db->where('blog_post.status ', 1);
		$this->db->where('blog_post.type ', 0);
		$this->db->where_in('blog_post.id ', $idArr);
		$this->db->order_by("blog_post.id ","desc");
		$query = $this->db->get();

		if ($query->num_rows() > 0) 
		{
			foreach ($query->result() as $row) 
			{
				$data[] = $row;
			}
			return $data;
		}
		return array();
	}

	public function fetch_categorywise_posts($limit, $start,$catId,$idArr=array() ) 
	{
		$this->db->distinct();
		$this->db->select("blog_post.*,users.first_name,users.last_name,blog_categories.cat_name,blog_categories.slug AS cat_slug");
		$this->db->from("blog_post");
		$this->db->join("users","users.id=blog_post.author_id");
		//$this->db->join("category_map","blog_post.id=category_map.post_id");//000
		//$this->db->join("blog_categories","blog_categories.id=category_map.cat_id");//000
		$this->db->join("blog_categories","blog_categories.id=blog_post.primary_cat_id"); //pr
		$this->db->where('blog_post.deleted_at ', "Null");
		$this->db->where('blog_post.status', 1);
		$this->db->where('blog_post.type ', 0);
		$this->db->where('blog_post.primary_cat_id',$catId);
		$this->db->where('blog_post.is_cat_first', 0);
		$this->db->limit($limit, $start);
		if($catId==41){
			$this->db->order_by("blog_post.ordering_medicare","desc");
		}
		if($catId==43){
			$this->db->order_by("blog_post.ordering_retirement","desc");
		}
		if($catId==44){
			$this->db->order_by("blog_post.ordering_healthy","desc");
		}
		if(count($idArr)>0){
			//$this->db->join("category_map","blog_post.id=category_map.post_id");//000
			//$this->db->join("blog_categories","blog_categories.id=category_map.cat_id");//0000
			$this->db->or_where_in('blog_post.id ', $idArr);
		}
		$query = $this->db->get();

		if ($query->num_rows() > 0) 
		{
			foreach ($query->result() as $row) 
			{
				$data[] = $row;
			}
			return $data;
		}
		return array();
	}

	public function getAllPostbyAuthor($dataArr) 
	{
		$this->db->distinct();
		$this->db->select("blog_post.*,users.first_name,users.last_name,blog_categories.cat_name,blog_categories.slug AS cat_slug");
		$this->db->from("blog_post");
		$this->db->join("users","users.id=blog_post.author_id");
		$this->db->join("blog_categories","blog_categories.id=blog_post.primary_cat_id");
		$this->db->limit(2, 0);
		$this->db->order_by("blog_post.id",'RANDOM');
		$this->db->where('blog_post.deleted_at ', "Null");
		$this->db->where('blog_post.status ', 1);
		$this->db->where('blog_post.type ', 0);
		$this->db->where('users.first_name ', $dataArr->first_name);
		$this->db->where('users.last_name ', $dataArr->last_name);

		$query = $this->db->get();

		if ($query->num_rows() > 0) 
		{
			foreach ($query->result() as $row) 
			{
				$data[] = $row;
			}
			return $data;
		}
		return false;
	}

	public function fetch_posts($limit, $start,$idArr=array() ) 
	{
		$this->db->distinct();
		$this->db->select("blog_post.*,users.first_name,users.last_name,blog_categories.cat_name,blog_categories.slug AS cat_slug");
		$this->db->from("blog_post");
		$this->db->join("users","users.id=blog_post.author_id");
		$this->db->join("category_map","blog_post.id=category_map.post_id");
		$this->db->join("blog_categories","blog_categories.id=category_map.cat_id");

		$this->db->limit($limit, $start);
		$this->db->order_by("blog_post.id","desc");
		$this->db->where('blog_post.deleted_at ', "Null");
		$this->db->where('blog_post.status ', 1);
		$this->db->where('blog_post.type ', 0);
		$this->db->where('blog_post.is_cat_first', '0');
		if(count($idArr)>0){
			$this->db->where_in('blog_post.id ', $idArr);
		}
		$query = $this->db->get();

		if ($query->num_rows() > 0) 
		{
			foreach ($query->result() as $row) 
			{
				$data[] = $row;
			}
			return $data;
		}
		return array();
	}

	public function getAllpost($idArr) 
	{
		$this->db->distinct();
		$this->db->select('post_id');
		$this->db->from("category_map");
		$this->db->where_in('cat_id ', $idArr);

		$query = $this->db->get();

		if ($query->num_rows() > 0) 
		{
			foreach ($query->result() as $row) 
			{
				$data[] = $row;
			}
			return $data;
		}
		return false;
	}

	public function getAllRecommendedPost($idArr) 
	{
		$this->db->select("blog_post.*,blog_categories.cat_name,blog_categories.slug AS cat_slug");
		$this->db->from("blog_post");
		$this->db->join("blog_categories","blog_categories.id=blog_post.primary_cat_id");
		$this->db->limit(3, 0);
		$this->db->order_by("blog_post.id",'RANDOM');
		$this->db->where('blog_post.deleted_at ', "Null");
		$this->db->where('blog_post.status ', 1);
		$this->db->where('blog_post.type ', 0);
		if(count($idArr)>0)
		{
			$this->db->where_in('blog_post.id ', $idArr);
		}
		$query = $this->db->get();

		if ($query->num_rows() > 0) 
		{
			foreach ($query->result() as $row) 
			{
				$data[] = $row;
			}
			return $data;
		}
		return false;
	}
	public function getAllRelatedPost($idArr) 
	{
		$this->db->select("blog_post.*,blog_categories.cat_name,blog_categories.slug AS cat_slug");
		$this->db->from("blog_post");
		$this->db->join("blog_categories","blog_categories.id=blog_post.primary_cat_id");
		$this->db->limit(10, 0);
		$this->db->order_by("blog_post.id",'RANDOM');
		$this->db->where('blog_post.deleted_at ', "Null");
		$this->db->where('blog_post.status ', 1);
		$this->db->where('blog_post.type ', 0);
		if(count($idArr)>0)
		{
			$this->db->where_in('blog_post.id ', $idArr);
		}
		$query = $this->db->get();

		if ($query->num_rows() > 0) 
		{
			foreach ($query->result() as $row) 
			{
				$data[] = $row;
			}
			return $data;
		}
		return false;
	}

	public function fetch_categorys() 
	{		
		$this->db->limit(10, 0);
		$query = $this->db->get("blog_categories");

		if ($query->num_rows() > 0) 
		{
			foreach ($query->result() as $row) 
			{
				$data[] = $row;
			}
			return $data;
		}
		return false;
	}
}
?>
