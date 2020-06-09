<?php

namespace App\Api;

class ApiError
{
  public static function customizeError($message, $code)
  {
    return [
      'data' => [
        'msg' => $message,
        'code' => $code
      ],
    ];
  }

  public static function serverError()
  {
    return [
      'data' => [
        'msg' => 'Erro interno no servidor!',
        'code' => 500
      ],
    ];
  }

  public static function dataError()
  {
    return [
      'data' => [
        'msg' => 'Erro nos dados enviados!',
        'code' => 400
      ],
    ];
  }

  public static function success()
  {
    return [
      'data' => [
        'msg' => 'Sucesso!',
        'code' => 200
      ]
    ];
  }

  public static function notFound()
  {
    return [
      'data' => [
        'msg' => 'Não encontrado!',
        'code' => 404
      ]
    ];
  }
}
