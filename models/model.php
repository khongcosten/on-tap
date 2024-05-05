<?php 
	/**
	 * 
	 */
	class datamodel
	{
		private $host='localhost';
		private $user='root';
		private $pass='';
		private $dbname='project_sv';
		private $connect=null;
		
		function __construct()
		{
			$this->ketnoi();
		}
		public function ketnoi(){
			$this->connect=new mysqli($this->host, $this->user,$this->pass,$this->dbname);
			mysqli_set_charset($this->connect,'UTF8');
		}
		public function laysinhvien(){
			$sql='select * from tbl_sinhvien';
			$this->ketqua=$this->connect->query($sql);
			if($this->ketqua->num_rows==0){
				$data=0;

			}else {
				while ($row=$this->ketqua->fetch_assoc()){
						$data[]=$row;
			}
				}
				return $data;
		}
		public function laysinhviennu(){
			$sql='select * from tbl_sinhvien where gt="Nữ"';
			$this->ketqua=$this->connect->query($sql);
			if($this->ketqua->num_rows==0){
				$data=0;

			}else {
				while ($row=$this->ketqua->fetch_assoc()){
						$data[]=$row;
			}
				}
				return $data;
		}
		public function laysinhvientheomasv($ma_sv){
			$sql='select * from tbl_sinhvien where ma_sv="'.$ma_sv.'"';
			$this->ketqua=$this->connect->query($sql);
			if($this->ketqua->num_rows==0){
				$data=0;

			}else {
				while ($row=$this->ketqua->fetch_assoc()){
						$data[]=$row;
			}
				}
				return $data;
		}
		public function laytenlop(){
			$sql='select * from tbl_lop';
			$this->ketqua=$this->connect->query($sql);
			if($this->ketqua->num_rows==0){
				$data=0;

			}else {
				while ($row=$this->ketqua->fetch_assoc()){
						$data[]=$row;
			}
				}
				return $data;
		}
		public function suasinhvien($a1,$a2,$a3,$a4,$masv){
			$sql='update tbl_sinhvien
					set ten_sv="'.$a1.'", date1="'.$a2.'",gt="'.$a3.'",ma_lop="'.$a4.'"
					where ma_sv="'.$masv.'"';
			$this->connect->query($sql);
		}
		public function themsv($a1,$a2,$a3,$a4){
			$sql='insert into tbl_sinhvien(ten_sv,date1,gt,ma_lop) values ("'.$a1.'","'.$a2.'","'.$a3.'","'.$a4.'")';
			$this->connect->query($sql);
		}
		public function sinhvienduoi20tuoi(){
			$sql='select * from tbl_sinhvien where TIMESTAMPDIFF(YEAR, date1 , CURDATE()) < 20';
			$this->ketqua=$this->connect->query($sql);
			if($this->ketqua->num_rows==0){
				$data=0;

			}else {
				while ($row=$this->ketqua->fetch_assoc()){
						$data[]=$row;
			}
				}
				return $data;
		}
		public function xoasinhvien($masv){
			$sql='delete from tbl_sinhvien where ma_sv="'.$masv.'"';
			$this->connect->query($sql);
		}
	}
 ?>