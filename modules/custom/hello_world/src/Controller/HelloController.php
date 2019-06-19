<?php

namespace Drupal\hello_world\Controller;


use Drupal\Component\Datetime\Time;


use Drupal\Core\Controller\ControllerBase;


class HelloController extends ControllerBase {


  public function content()
  {

    return array(




      ini_set('date.timezone', 'America/Costa_Rica'),
      $cero = strtotime('-0 Days'),
      $hoy=(date('d/m/Y',$cero )),
      $uno = strtotime('-1 Days'),
      $primeros=(date('d/m/Y',$uno )),
      $dos = strtotime('-2 Days'),
    $segundo=(date('d/m/Y',$dos )),
      $tres = strtotime('-3 Days'),
    $tercero=(date('d/m/Y',$tres )),
      $cuatro = strtotime('-4 Days'),
      $cuartos=(date('d/m/Y',$cuatro )),


       $response0 = \Drupal::httpClient()->get("https://gee.bccr.fi.cr/indicadoreseconomicos/WebServices/wsIndicadoresEconomicos.asmx/ObtenerIndicadoresEconomicosXML?tcIndicador=318&tcFechaInicio=$hoy&tcFechaFinal=$hoy&tcNombre=Nombre&tnSubNiveles=N", array('headers' => array('Accept' => 'text/plain'))),
      $data0 = (string) $response0->getBody()->getContents(),
      $response1 = \Drupal::httpClient()->get("https://gee.bccr.fi.cr/indicadoreseconomicos/WebServices/wsIndicadoresEconomicos.asmx/ObtenerIndicadoresEconomicosXML?tcIndicador=318&tcFechaInicio=$primeros&tcFechaFinal=$primeros&tcNombre=Nombre&tnSubNiveles=N", array('headers' => array('Accept' => 'text/plain'))),
      $data1 = (string) $response1->getBody()->getContents(),
      $response2 = \Drupal::httpClient()->get("https://gee.bccr.fi.cr/indicadoreseconomicos/WebServices/wsIndicadoresEconomicos.asmx/ObtenerIndicadoresEconomicosXML?tcIndicador=318&tcFechaInicio=$segundo&tcFechaFinal=$segundo&tcNombre=Nombre&tnSubNiveles=N", array('headers' => array('Accept' => 'text/plain'))),
      $data2 = (string) $response2->getBody()->getContents(),
      $response3 = \Drupal::httpClient()->get("https://gee.bccr.fi.cr/indicadoreseconomicos/WebServices/wsIndicadoresEconomicos.asmx/ObtenerIndicadoresEconomicosXML?tcIndicador=318&tcFechaInicio=$tercero&tcFechaFinal=$tercero&tcNombre=Nombre&tnSubNiveles=N", array('headers' => array('Accept' => 'text/plain'))),
      $data3 = (string) $response3->getBody()->getContents(),
      $response4 = \Drupal::httpClient()->get("https://gee.bccr.fi.cr/indicadoreseconomicos/WebServices/wsIndicadoresEconomicos.asmx/ObtenerIndicadoresEconomicosXML?tcIndicador=318&tcFechaInicio=$cuartos&tcFechaFinal=$cuartos&tcNombre=Nombre&tnSubNiveles=N", array('headers' => array('Accept' => 'text/plain'))),
      $data4 = (string) $response4->getBody()->getContents(),
      $response5 = \Drupal::httpClient()->get("https://gee.bccr.fi.cr/indicadoreseconomicos/WebServices/wsIndicadoresEconomicos.asmx/ObtenerIndicadoresEconomicosXML?tcIndicador=317&tcFechaInicio=$hoy&tcFechaFinal=$hoy&tcNombre=Nombre&tnSubNiveles=N", array('headers' => array('Accept' => 'text/plain'))),
      $data5 = (string) $response5->getBody()->getContents(),
      $response6 = \Drupal::httpClient()->get("https://gee.bccr.fi.cr/indicadoreseconomicos/WebServices/wsIndicadoresEconomicos.asmx/ObtenerIndicadoresEconomicosXML?tcIndicador=317&tcFechaInicio=$primeros&tcFechaFinal=$primeros&tcNombre=Nombre&tnSubNiveles=N", array('headers' => array('Accept' => 'text/plain'))),
      $data6 = (string) $response6->getBody()->getContents(),
      $response7 = \Drupal::httpClient()->get("https://gee.bccr.fi.cr/indicadoreseconomicos/WebServices/wsIndicadoresEconomicos.asmx/ObtenerIndicadoresEconomicosXML?tcIndicador=317&tcFechaInicio=$segundo&tcFechaFinal=$segundo&tcNombre=Nombre&tnSubNiveles=N", array('headers' => array('Accept' => 'text/plain'))),
      $data7 = (string) $response7->getBody()->getContents(),
      $response8 = \Drupal::httpClient()->get("https://gee.bccr.fi.cr/indicadoreseconomicos/WebServices/wsIndicadoresEconomicos.asmx/ObtenerIndicadoresEconomicosXML?tcIndicador=317&tcFechaInicio=$tercero&tcFechaFinal=$tercero&tcNombre=Nombre&tnSubNiveles=N", array('headers' => array('Accept' => 'text/plain'))),
      $data8 = (string) $response8->getBody()->getContents(),
      $response9 = \Drupal::httpClient()->get("https://gee.bccr.fi.cr/indicadoreseconomicos/WebServices/wsIndicadoresEconomicos.asmx/ObtenerIndicadoresEconomicosXML?tcIndicador=317&tcFechaInicio=$cuartos&tcFechaFinal=$cuartos&tcNombre=Nombre&tnSubNiveles=N", array('headers' => array('Accept' => 'text/plain'))),
      $data9 = (string) $response9->getBody()->getContents(),

      $xml1=simplexml_load_string($data1).
        $xml0=simplexml_load_string($data0).
          $xml2=simplexml_load_string($data2).
            $xml3=simplexml_load_string($data3).
              $xml4=simplexml_load_string($data4).
                $xml5=simplexml_load_string($data5).
                  $xml6=simplexml_load_string($data6).
                    $xml7=simplexml_load_string($data7).
                      $xml8=simplexml_load_string($data8).
                        $xml9=simplexml_load_string($data9).

      '#type' => 'markup',
      '#markup' => $this->t('Vamos con todo!'),
      $form['Banco'] = array(
        '#type' => 'table',
        '#caption' => $this
          ->t('Cambio de dolar en el BCR'),
        '#header' => array(
          $this
            ->t('Fecha'),
          $this
            ->t('Compra'),
          $this
            ->t('Venta'),
        ),
      ),
      $form['Bancos'] = array(
        '#type' => 'table',
        '#header' => array(
          $this
            ->t(date('y-m-d',$cero)),
          $this
            ->t($xml0),
          $this
            ->t($xml5),
        ),
      ),

      $form['Banco'] = array(
        '#type' => 'table',
        '#header' => array(
          $this
            ->t(date('y-m-d',$uno )),
          $this
            ->t($xml1),
          $this
            ->t($xml6),
        ),
      ),
      $form['Banco'] = array(
        '#type' => 'table',
        '#header' => array(
          $this
            ->t(date('y-m-d',$dos )),
          $this
            ->t($xml2),
          $this
            ->t($xml7),
        ),
      ),
      $form['Banco'] = array(
        '#type' => 'table',
        '#header' => array(
          $this
            ->t(date('y-m-d',$tres )),
          $this
            ->t($xml3),
          $this
            ->t($xml8),
        ),
      ),
      $form['Banco'] = array(
        '#type' => 'table',
        '#header' => array(
          $this
            ->t(date('y-m-d',$cuatro)),
          $this
            ->t($xml4),
          $this
            ->t($xml9),
        ),
      ),
    );
  }}

