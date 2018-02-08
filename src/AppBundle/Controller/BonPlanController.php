<?php
/**
 * Created by PhpStorm.
 * User: Emir
 * Date: 04/02/2018
 * Time: 16:01
 */

namespace AppBundle\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BonPlanController extends Controller
{
    public function layoutAction()
    {
        return $this->render('layout.html.twig');
    }
    public function homeAction()
    {
        return $this->render('Home/home.html.twig');
    }
    public function list_restaurantAction()
    {
        return $this->render('Categories/list_restaurant.html.twig');
    }
    public function list_hotelsAction()
    {
        return $this->render('Categories/list_hotels.html.twig');
    }
    public function list_beaute_et_bien_etreAction()
    {
        return $this->render('Beauteetbienetre/list_beaute_et_bien_etre.html.twig');
    }
    public function blogAction()
    {
        return $this->render('Blog/articles.html.twig');
    }
    public function contactAction()
    {
        return $this->render('Contact/contact.html.twig');
    }
    public function dealsAction()
    {
        return $this->render('deals/deals.html.twig');
    }
}