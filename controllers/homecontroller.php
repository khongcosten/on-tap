<?php 

	require_once 'models/model.php';

/**
  * 
  */
 class datacontroller
 {
 	private $model;
 	function __construct()
 	{
 		$this->model=new datamodel();
 	}
 	public function dieuhuong(){
 		if (isset($_GET['action'])){
 			switch ($_GET['action']) {
 				case 'suasv':
 					$data=$this->model->laytenlop();
 					$datalay=$this->model->laysinhvientheomasv($_GET['ma_sv']);
 					include_once('views/suasv.php');
 					if (isset($_POST['nutsua'])){
 						$t1=$_POST['tensv'];
 						$t2=$_POST['date'];
 						$t3=$_POST['gt'];
 						$t4=$_POST['lop'];
 						$this->model->suasinhvien($t1,$t2,$t3,$t4,$_GET['ma_sv']);
 						header('location:index.php');
 					}
 					break;
 				case 'themsv':
					$data_lay=$this->model->laytenlop();
					include_once('views/themsv.php');
					if (isset($_POST['nutthem'])){
						$t1=$_POST['tensv'];
						$t2=$_POST['date'];
						$t3=$_POST['gt'];
						$t4=$_POST['lop'];
						$this->model->themsv($t1,$t2,$t3,$t4);
						header('location:index.php');
					}
					break;
				case 'xoasv':
					$this->model->xoasinhvien($_GET['ma_sv']);
					header('location:index.php');
					break;
 				default:
 					// code...
 					break;
 			}
 		} else {
			$data=$this->model->laysinhvien();
	 		$datanu=$this->model->laysinhviennu();
	 		$data20=$this->model->sinhvienduoi20tuoi();
	 		include_once('views/home.php');
 		}
 		
 	}
 } ?>