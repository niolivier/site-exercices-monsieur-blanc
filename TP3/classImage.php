<?php

class Image
{

	private $width,$height;
	private $image;
	private $image_type;

	public function __construct()
	{
		$cpt = func_num_args();
		$args = func_get_args();

		switch($cpt)
		{
			case '0' : 
				exit ("Il faut au moins un argument");
				break;
			case '1':
				$filename=$args[0];
				$image_info=getimagesize($filename);
				$this->image_type=$image_info[2];
				if ($this->image_type == IMAGETYPE_JPEG) {
					//echo"coucou";
					$this->image = imagecreatefromjpeg($filename);
				} elseif ($this->image_type == IMAGETYPE_GIF) {
					$this->image = imagecreatefromgif($filename);
				} elseif ($this->image_type == IMAGETYPE_PNG) {
					$this->image = imagecreatefrompng($filename);
				} else {
					throw new Exception("The file you're trying to open is not supported");
				}
				$this->width=imagesx($this->image);
				$this->height=imagesy($this->image);

				break;
			case '2':
				$this->width=$args[0];
				$this->height=$args[1];
				$this->image_type=IMAGETYPE_PNG;
				$this->image=imagecreatetruecolor($this->width,$this->height);
				break;
			default:
				break;
		}
		
		
		//or die('Cannot initialize');	
	}

	public function getWidth()
	{
		return $this->width;
	}
	public function getHeight()
	{
		return $this->height;
	}
	public function getImage()
	{
		return $this->image;
	}
	public function changeCouleurImageXY($i,$j,$niveauR,$niveauV,$niveauB)
	{

		$couleur = imagecolorallocate($this->image,$niveauR,$niveauV,$niveauB);
		imagesetpixel($this->image,$i, $j, $couleur);
	}
	public function getRougeImageXY($i,$j)
	{
		$rgb = imagecolorat($this->image, $i, $j);
		$r = ($rgb >> 16) & 0xFF;
		return $r;
	}
	public function getBleuImageXY($i,$j)
	{
		$rgb = imagecolorat($this->image, $i, $j);
		$b = $rgb & 0xFF;
		return $b;
	}
	public function getVertImageXY($i,$j)
	{
		$rgb = imagecolorat($this->image, $i, $j);
		$g = ($rgb >> 8) & 0xFF;
		return $g;
	}
	public function afficherImage()
	{
		if ($this->image_type == IMAGETYPE_JPEG) {
			header("Content-type: image/jpeg");
			imagejpeg($this->image, null);
		} elseif ($this->image_type == IMAGETYPE_GIF) {
			header("Content-type: image/gif");
			imagegif($this->image);         
		} elseif ($this->image_type == IMAGETYPE_PNG) {
			header("Content-type: image/png");
			imagepng($this->image);
		}
		header("Content-type: image/png"); //la ligne qui change tout !
		imagepng($this->image);
	}
}




?>