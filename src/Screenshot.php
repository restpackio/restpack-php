<?php
namespace Restpack;

class Screenshot {
  private $client;

  public function __construct($accessToken) {
    $this->client = new RestpackClient($accessToken, "https://restpack.io/api/screenshot/v3");
  }

  public function capture($url, $options = []) {
    $response = $this->client->request("POST", "/capture", [
      "json" => array_merge($options, [ "url" => $url, "json" => "true" ])
    ]);

    return json_decode($response->getBody());
  }

  public function captureHTML($html, $options = []) {
    $response = $this->client->request("POST", "/capture", [
      "json" => array_merge($options, [ "html" => $html, "json" => "true" ])
    ]);

    return json_decode($response->getBody());
  }

  public function captureToImage($url, $options = []) {
    $response = $this->client->request("POST", "/capture", [
      "json" => array_merge($options, [ "url" => $url ])
    ]);

    return $response->getBody();
  }

  public function captureHTMLToImage($html, $options = []) {
    $response = $this->client->request("POST", "/capture", [
      "json" => array_merge($options, [ "html" => $html ])
    ]);

    return $response->getBody();
  }
}
