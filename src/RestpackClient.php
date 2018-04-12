<?php
namespace Restpack;

use GuzzleHttp;

class RestpackClient {
  private $httpClient;
  private $accessToken;
  private $basePath;

  public function __construct($accessToken, $basePath) {
    $this->httpClient = new GuzzleHttp\Client;
    $this->accessToken = $accessToken;
    $this->basePath = $basePath;
  }

  public function request($method, $path, $options) {
    $path = $this->basePath . $path;
    $options["headers"] = ["x-access-token" => $this->accessToken];
    return $this->httpClient->request($method, $path, $options);
  }
}
