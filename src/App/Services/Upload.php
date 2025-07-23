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
    $tamanhoMaximo = 1024 * 1024 * 15; // 15mb

    if ($fileData['size'] > $tamanhoMaximo) {
      $erros[] = 'O arquivo é muito grande. O tamanho máximo permitido é ' . ($tamanhoMaximo / (1024 * 1024)) . 'MB.';
  }
    
    if ($tamanhoArquivo > $tamanhoMaximo) {
      $erros[] = "Seu arquivo excede o tamanho máximo.<br>"; 
    }
    
    $nomeArquivo = $fileData['name'];
    $extensoesPermitidas = ['png', 'jpg', 'jpeg', 'webp'];  
    $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION)); 

    if (!in_array($extensao, $extensoesPermitidas)) { 
      $erros[] = "Arquivo não permitido. Apenas tipos de imagem (PNG, JPEG, GIF, WEBP) são aceitos.<br>"; 
    }
    
    $tipoArquivo = $fileData['type'];
    $typesPermitidos = ['image/png', 'image/jpeg'];
    if (!in_array($tipoArquivo, $typesPermitidos)) { 
        $erros[] = "Tipo de arquivo não permitido. Apenas tipos de imagem (PNG, JPEG, GIF, WEBP) são aceitos.<br>"; 
    }

    if (!empty($erros)) { 
      return ['success' => false, 'fileName' => null, 'errors' => $erros];
    } else { 
      $nomeUnico = uniqid('img_', true) . '.' . $extensao;
      $nomeTemporario = $fileData['tmp_name'];
      $caminhoCompleto = $uploadDir . $nomeUnico;

      if (!is_dir($uploadDir)){
        if (!mkdir($uploadDir, 0777, true)){
          $erros[] = "Não foi possível criar o diretório de upload: " . $uploadDir;
          return ['success' => false, 'fileName' => null, 'errors' => $erros];
        };
        }
      }

      if (move_uploaded_file($nomeTemporario, $caminhoCompleto)) {
        return ['success' => true, 'fileName' => $nomeUnico, 'errors'=>[]];
      } else {
        return ['success' => false, 'fileName' => null, 'errors' => $erros];
      }
  }
  
}