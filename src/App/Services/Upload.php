<?php
namespace App\Services;

class Upload
{
  public function uploadImagem($fileData, $uploadDir) {

    $erros= [];

    if (!isset($fileData['name']) || $fileData['error'] !== UPLOAD_ERR_OK) {
      $erros[] = "Nenhum arquivo enviado ou erro no upload.";
      return ['success' => false, 'fileName' => null, 'errors' => $erros];
    }

    $tamanhoArquivo = $fileData['size'];
    $tamanhoMaximo = 1024 * 1024 * 15; 
    
    if ($tamanhoArquivo > $tamanhoMaximo) {
      $erros[] = "Seu arquivo excede o tamanho máximo.<br>"; 
    }
    
    $nomeArquivo = $fileData['name'];
    $extensoesPermitidas = ['png', 'jpg', 'jpeg'];  
    $extensao = pathinfo($nomeArquivo, PATHINFO_EXTENSION); 
    if (!in_array($extensao, $extensoesPermitidas)) { 
      $erros[] = "Arquivo não permitido.<br>"; 
    }
    
    $tipoArquivo = $fileData['type'];
    $typesPermitidos = ['image/png', 'image/jpeg'];
    if (!in_array($tipoArquivo, $typesPermitidos)) { 
        $erros[] = "Tipo de arquivo não permitido.<br>"; 
    }

    if (!empty($erros)) { 
      return ['success' => false, 'fileName' => null, 'errors' => $erros];
    } else { 
      $nomeTemporario = $fileData['tmp_name'];
      $caminhoCompleto = $uploadDir . $nomeArquivo;

      if (move_uploaded_file($nomeTemporario, $caminhoCompleto)) {
        return ['success' => true, 'fileName' => $nomeArquivo, 'errors' => []];
      } else {
        return ['success' => false, 'fileName' => null, 'errors' => $erros];
      }
    }
  }
}