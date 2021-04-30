<?php
namespace Restpack;

class HTMLToPDF {
  private $client;

  public function __construct($accessToken) {
    $this->client = new RestpackClient($accessToken, "https://restpack.io/api/html2pdf/v7");
  }

  public function convert($url, $options = []) {
    $response = $this->client->request("POST", "/convert", [
      "json" => array_merge($options, [ "url" => $url, "json" => "true" ])
    ]);

    return json_decode($response->getBody());
  }

  public function convertHTML($html, $options = []) {
    $response = $this->client->request("POST", "/convert", [
      "json" => array_merge($options, [ "html" => $html, "json" => "true" ])
    ]);

    return json_decode($response->getBody());
  }

  public function convertToPDF($url, $options = []) {
    $response = $this->client->request("POST", "/convert", [
      "json" => array_merge($options, [ "url" => $url ])
    ]);

    return $response->getBody();
  }

  public function convertHTMLToPDF($html, $options = []) {
    $response = $this->client->request("POST", "/convert", [
      "json" => array_merge($options, [ "html" => $html ])
    ]);

    return $response->getBody();
  }
}
