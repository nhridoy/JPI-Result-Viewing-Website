<?php

	class connect{
		public $host="localhost";
		public $username="root";
		public $password="";
		public $database="jpi_result";
		public $connect;

		public function __construct(){
			$this->connect = new mysqli($this->host,$this->username,$this->password,$this->database);

			if(!$this->connect){
				echo "Cann't Connect To Database";
			}
		}



		public function insert($insert){
			$insert = $this->connect->query($insert);
			if(!$insert){
				echo "Cann't Insert To Database";
			}
		}


		public function option($select_option){
			$select_option = $this->connect->query($select_option);
			return $select_option;
		}


		public function search($search){
			$search = $this->connect->query($search);
			if(mysqli_num_rows($search)==1){
				throw new exception;
			}
		}

		public function cmt1st($cmt1st){
			$cmt1st = $this->connect->query($cmt1st);
			if(mysqli_num_rows($cmt1st)==1){
				throw new exception;
			}
		}

		public function cmt2nd($cmt2nd){
			$cmt2nd = $this->connect->query($cmt2nd);
			if(mysqli_num_rows($cmt2nd)==1){
				throw new exception;
			}
		}

		public function cmt3rd($cmt3rd){
			$cmt3rd = $this->connect->query($cmt3rd);
			if(mysqli_num_rows($cmt3rd)==1){
				throw new exception;
			}
		}

		public function c1st($c1st){
			$c1st = $this->connect->query($c1st);
			if(mysqli_num_rows($c1st)==1){
				throw new exception;
			}
		}

		public function c2nd($c2nd){
			$c2nd = $this->connect->query($c2nd);
			if(mysqli_num_rows($c2nd)==1){
				throw new exception;
			}
		}

		public function c3rd($c3rd){
			$c3rd = $this->connect->query($c3rd);
			if(mysqli_num_rows($c3rd)==1){
				throw new exception;
			}
		}

		public function m1st($m1st){
			$m1st = $this->connect->query($m1st);
			if(mysqli_num_rows($m1st)==1){
				throw new exception;
			}
		}

		public function m2nd($m2nd){
			$m2nd = $this->connect->query($m2nd);
			if(mysqli_num_rows($m2nd)==1){
				throw new exception;
			}
		}

		public function m3rd($m3rd){
			$m3rd = $this->connect->query($m3rd);
			if(mysqli_num_rows($m3rd)==1){
				throw new exception;
			}
		}

		public function et1st($et1st){
			$et1st = $this->connect->query($et1st);
			if(mysqli_num_rows($et1st)==1){
				throw new exception;
			}
		}

		public function et2nd($et2nd){
			$et2nd = $this->connect->query($et2nd);
			if(mysqli_num_rows($et2nd)==1){
				throw new exception;
			}
		}

		public function et3rd($et3rd){
			$et3rd = $this->connect->query($et3rd);
			if(mysqli_num_rows($et3rd)==1){
				throw new exception;
			}
		}

		public function etc1st($etc1st){
			$etc1st = $this->connect->query($etc1st);
			if(mysqli_num_rows($etc1st)==1){
				throw new exception;
			}
		}

		public function etc2nd($etc2nd){
			$etc2nd = $this->connect->query($etc2nd);
			if(mysqli_num_rows($etc2nd)==1){
				throw new exception;
			}
		}

		public function etc3rd($etc3rd){
			$etc3rd = $this->connect->query($etc3rd);
			if(mysqli_num_rows($etc3rd)==1){
				throw new exception;
			}
		}

		public function pw1st($pw1st){
			$pw1st = $this->connect->query($pw1st);
			if(mysqli_num_rows($pw1st)==1){
				throw new exception;
			}
		}

		public function pw2nd($pw2nd){
			$pw2nd = $this->connect->query($pw2nd);
			if(mysqli_num_rows($pw2nd)==1){
				throw new exception;
			}
		}

		public function pw3rd($pw3rd){
			$pw3rd = $this->connect->query($pw3rd);
			if(mysqli_num_rows($pw3rd)==1){
				throw new exception;
			}
		}

		public function tct1st($tct1st){
			$tct1st = $this->connect->query($tct1st);
			if(mysqli_num_rows($tct1st)==1){
				throw new exception;
			}
		}

		public function tct2nd($tct2nd){
			$tct2nd = $this->connect->query($tct2nd);
			if(mysqli_num_rows($tct2nd)==1){
				throw new exception;
			}
		}

		public function tct3rd($tct3rd){
			$tct3rd = $this->connect->query($tct3rd);
			if(mysqli_num_rows($tct3rd)==1){
				throw new exception;
			}
		}


		public function select($select){
			$select = $this->connect->query($select);
			return $select;
		}


		public function marks($marks){
			$marks = $this->connect->query($marks);
			return $marks;
		}


		public function update($update){
			$update = $this->connect->query($update);
			if(!$update){
				echo "Can not Edit Marks";
			}
		}






	}



?>