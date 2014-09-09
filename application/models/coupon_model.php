<?php
if ( !defined( 'BASEPATH' ) )
	exit( 'No direct script access allowed' );
class Coupon_model extends CI_Model
{
	//topic
	public function create($name,$rules)
	{
		$data  = array(
			'couponname' => $name,
			'rules' => $rules
		);
		$query=$this->db->insert( 'coupon', $data );
		
		return  1;
	}
	function viewcoupon()
	{
		$query=$this->db->query("SELECT * FROM `coupon` ")->result();
		return $query;
	}
	public function beforeedit( $id )
	{
		$this->db->where( 'id', $id );
		$query=$this->db->get( 'coupon' )->row();
		return $query;
	}
	
	public function edit( $id,$name,$rules)
	{
		$data = array(
			'couponname' => $name,
			'rules' => $rules
		);
		$this->db->where( 'id', $id );
		$query=$this->db->update( 'coupon', $data );
		
		return 1;
	}
	function delete($id)
	{
		$query=$this->db->query("DELETE FROM `coupon` WHERE `id`='$id'");
		
	}
	public function getofferdropdown()
	{
		$query=$this->db->query("SELECT * FROM `offers`  ORDER BY `id` ASC")->result();
		$return=array(
		"" => ""
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->header;
		}
		
		return $return;
	}
	public function getoffer()
	{
		$query=$this->db->query("SELECT * FROM `offers`  ORDER BY `header` ASC")->result();
		
		
		return $query;
	}
	public function getstatusdropdown()
	{
		$status= array(
			 "1" => "Enabled",
			 "0" => "Disabled",
			);
		return $status;
	}
}
?>