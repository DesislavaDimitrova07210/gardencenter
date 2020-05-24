<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use SunCat\MobileDetectBundle\Twig\Extension\MobileDetectExtension;


class ContactsController extends Controller
{
    /**
     *@Route("/contacts", name="contacts")
     */

    public function ShowContacts()
    {
        $arr = array(
            /*"title" => "Заповядайте в магазина ни в",
            "city" => "гр. Ботевград",
            "city_code" => "2140",
            "street" => "(ул.А. Стамболийски 27)",*/
            "title" => "Предстоящо откриване",
            "city" => "скоро...",
            "city_code" => "",
            "street" => "",
        );

        return  $this->render('homepage\contacts.html.twig',array('arr' => $arr));
    }
}

?>