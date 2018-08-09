 <?php 


class Conectar{

private $conectando;
	
	public function Base(){
		$conectando = new pgsql('locahost','postgres','rootroot','Farmacia');
		return $conectando;
	}

	public function Datos($enlase){

		$william = mysqli_query($this->Base(),$enlase);
		return $william;
	}
	
	public function sumar($pregunta){

		$gaby = mysqli_num_rows($pregunta);
		return $gaby;
	}
}



  ?>