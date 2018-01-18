<?php 
namespace src\Services;
/*  Wrapper TesseractOCR */
use thiagoalessio\TesseractOCR\TesseractOCR;
class CaptureTextImage{



	/* captura textos nas imagens com ajuda da tecnologia TesseractOCR e coloca o balão de texto de cada quadrinha em um array */
	/*
	@info Falta fazer o tratamento da imagem tirando ruidos,bordas entre outras formas para o TesseractOCR possa fazer um trabalho melhor
	*/
	public function captureBalon( string $path ) : array{
		$text = (new TesseractOCR($path))    	
		->run();

		$text= preg_replace("/\s\n/","|_|",$text);
		$textArray = explode("|_|",$text);
		return $textArray;

	}

	public function createFile(  ) : string{

	}

}