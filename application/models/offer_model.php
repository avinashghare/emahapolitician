<?php
if ( !defined( 'BASEPATH' ) )
	exit( 'No direct script access allowed' );
class Offer_model extends CI_Model
{
	//topic
	public function createoffer($header,$description,$from,$to,$brand,$storeid)
	{
		$data  = array(
			'header' => $header,
			'description' => $description,
			'from' => $from,
			'brandid' => $brand,
			'storeid' => $storeid,
			'to' => $to
		);
		$query=$this->db->insert( 'offers', $data );
		
		return  1;
	}
	function viewoffer()
	{
		$query=$this->db->query("SELECT `offers`.`id`,`offers`.`header`,`offers`.`description`,`offers`.`from`,`offers`.`to`,`brand`.`name` AS `brandname`,`store`.`name` AS `storename` FROM `offers` 
        LEFT OUTER JOIN `brand` ON `brand`.`id`=`offers`.`brandid`
        LEFT OUTER JOIN `store` ON `store`.`id`=`offers`.`storeid`
        ")->result();
		return $query;
	}
	public function beforeeditoffer( $id )
	{
		$this->db->where( 'id', $id );
		$query=$this->db->get( 'offers' )->row();
		return $query;
	}
	
	public function editoffer( $id,$header,$description,$from,$to,$brand,$storeid)
	{
		$data = array(
			'header' => $header,
			'description' => $description,
			'from' => $from,
			'brandid' => $brand,
			'storeid' => $storeid,
			'to' => $to
		);
		$this->db->where( 'id', $id );
		$query=$this->db->update( 'offers', $data );
		
		return 1;
	}
	function deleteoffer($id)
	{
		$query=$this->db->query("DELETE FROM `offers` WHERE `id`='$id'");
		
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