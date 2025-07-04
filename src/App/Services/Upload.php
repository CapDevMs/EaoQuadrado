<?php
namespace App\Services;

class Upload
{

  /**
     * Realiza o upload de uma imagem para o diretório especificado,
     * garantindo um nome de arquivo único.
     *
     * @param array $fileData O array $_FILES para a imagem (ex: $_FILES['imgProfile']).
     * @param string $uploadDir O diretório de destino no servidor (caminho absoluto).
     * @return array Um array associativo com 'success' (bool), 'fileName' (string do nome único salvo)
     * e 'errors' (array de mensagens de erro).
     */
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
        return ['success' => true, 'fileName' => $nomeArquivo, 'errors' => []];
      } else {
        return ['success' => false, 'fileName' => null, 'errors' => $erros];
      }
  }
  private function getFileUploadErrorMessage(int $errorCode): string
    {
      switch ($errorCode) {
        case UPLOAD_ERR_INI_SIZE:
          return 'O arquivo enviado excede a diretiva upload_max_filesize no php.ini.';
        case UPLOAD_ERR_FORM_SIZE:
          return 'O arquivo enviado excede a diretiva MAX_FILE_SIZE que foi especificada no formulário HTML.';
        case UPLOAD_ERR_PARTIAL:
          return 'O upload do arquivo foi feito apenas parcialmente.';
        case UPLOAD_ERR_NO_FILE:
          return 'Nenhum arquivo foi enviado.';
        case UPLOAD_ERR_NO_TMP_DIR:
          return 'Faltando uma pasta temporária.';
        case UPLOAD_ERR_CANT_WRITE:
          return 'Falha ao gravar arquivo em disco.';
        case UPLOAD_ERR_EXTENSION:
          return 'Uma extensão do PHP interrompeu o upload do arquivo.';
        default:
          return 'Erro de upload desconhecido.';
      }
    }
}