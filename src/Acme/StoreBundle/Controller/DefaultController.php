<?php
namespace Acme\StoreBundle\Controller;

use Acme\StoreBundle\Document\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {   

      /* $products = $this->get('doctrine_mongodb')
            ->getManager()
            ->getRepository('AcmeStoreBundle:Product')
            ->findAllOrderedByName();*/
       
     /*  $connection = $this->get('doctrine_mongodb')->getConnection();
    $mongo = $connection->getMongo();
    if(!$mongo){
        $connection->connect();
        $mongo = $connection->getMongo();
    }
    $db = $mongo->selectDB('tenda');
    $collection = $db->Product;
    $test = $collection->count();
    print_r($test); // return 3
       */
       $connection = $this->get('doctrine_mongodb')->getConnection();
        $mongo = $connection->getMongo();
        if(!$mongo){
            $connection->connect();
            $mongo = $connection->getMongo();
        }
        $db = $mongo->selectDB('tenda');
        $products = $db ->command(array( 
            "aggregate" => "Product",
            "pipeline" => 
                array( 
                    //array( '$match' => array( '_id' => 1, 'name'=>1 )),
                    array( '$sort' => array( "name" =>1 ) )
                )
        )); 
        
       //  print_r($products['result']); // return 3
       /*  for($i=0;$i<count($products['result']);$i++){
             print_r($products['result'][$i]['_id']->{'$id'});
             echo "<br>";
         }*/
         
      // exit();
        return $this->render('AcmeStoreBundle:Default:index.html.twig', array(
            'name' => $products['result']
        ));
    /*      $product = new Product();
    $product->setName('A Foo Bar');
    $product->setPrice('19.99');

    $dm = $this->get('doctrine_mongodb')->getManager();
    $dm->persist($product);
    $dm->flush();

    return new Response('Created product id '.$product->getId());*/
    }
    

}



