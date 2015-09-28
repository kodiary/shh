<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {
    var $components = array('Email');
    

function index()
{
    $this->loadModel('Media');
    $this->loadModel('Image');
    $this->loadModel('Update');
    $this->loadModel('Project');
    $this->loadModel('Slider');
    $this->loadModel('Gallerycat');
    $this->loadModel('Galleryimg');
    $cat= $this->Gallerycat->find('all',array('conditions'=>array('parent_id'=>'0'),'limit'=>8));
    
    
    $a = $this->Page->find('first',array('conditions'=>array('id'=>2)));
    $ac = $this->Page->find('all',array('conditions'=>array('parent'=>2)));
    $d = $this->Page->find('first',array('conditions'=>array('id'=>3)));
    $dc = $this->Page->find('all',array('conditions'=>array('parent'=>3)));
    $act = $this->Page->find('first',array('conditions'=>array('id'=>4)));
    $actc = $this->Page->find('all',array('conditions'=>array('parent'=>4)));
    //$actimg = $this->Image->find('all',array('order'=>'rand()','limit'=>9));
    $pr =  $this->Media->find('all',array('conditions'=>array('media_type'=>'Print')));
    $this->set('print',$pr);
    $pu =  $this->Media->find('all',array('conditions'=>array('media_type'=>'Publication')));
    $this->set('publication',$pu);
    $av =  $this->Media->find('all',array('conditions'=>array('media_type'=>'Audio-Visual')));
    $this->set('av',$av);
    $this->set('about',$a);
    $this->set('achild',$ac);
    $this->set('act',$act);
    $this->set('actc',$actc);
    $this->set('category',$cat);
    $this->set('depart',$d);
    $this->set('child',$dc);
    $this->set('updates',$this->Update->find('all',array('limit'=>5,'order'=>'id DESC')));
    $this->set('projects',$this->Project->find('all',array('limit'=>5,'order'=>'id DESC')));
    $this->set('slider',$this->Slider->find('all',array('limit'=>10,'order'=>'id DESC')));
}
function getImg($id)
{
    $this->loadModel('Galleryimg');
    //$q = $this->Galleryimg->find('first',array('conditions'=>array('cat_id IN (SELECT id FROM gallerycats where parent_id = "'.$id.'")')));
      $q=  $this->Galleryimg->find('first',array('conditions'=>array('cat_id IN (SELECT id FROM gallerycats where parent_id = "'.$id.'")')));
    if ($q && $q['Galleryimg']['img'])
    return $q['Galleryimg']['img'];
    else
    return 'noimage.png';
}
function player($id)
{
    $this->layout = 'blank';
    $this->loadModel('Media');
    $q = $this->Media->findById($id);
    $this->set('media',$q);
}
function contact()
{  
     $this->loadModel('Admin');
        $a=$this->Admin->find('first');
        if(isset($_POST) && $_POST)
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $admin =$a['Admin']['email'];
        //$message = $_POST['message'];
        $emails = new CakeEmail();
                $emails->from(array('noreply@islamisanghnepal.org'=>'Islami Sangh Nepal'));
                $emails->to($admin);
                $emails->emailFormat('html');
                $emails->subject('New contact Message');
                $message="
                Assalam Alaikum,<br/><br/>
                You have received a new message from islamisanghnepal.org<br/><br/> 

<b>From</b> : ".$name."<br/>
<b>Email</b> : ".$email."<br/>
<b>Message</b> : ".$_POST['message'];
                $emails->send($message);
                $this->Session->setFlash('Message sent successfully');
                $this->redirect('contact');
    }
    
}
    public function getpages($id)
    {
        return $dc = $this->Page->find('all',array('conditions'=>array('parent'=>$id)));;
    }
    public function detail($slug)
    {
        $q = $this->Page->findBySlug($slug);
        $this->loadModel('Update');
        $this->set('acts',$this->Update->find('all',array('conditions'=>array('act_id'=>$q['Page']['id']),'limit'=>5)));
        $this->set('pages',$q);
    }
    public function updates($slug=null)
    {
        $this->loadModel('Update');
        $this->loadModel('Page');
        
        $q = $this->Update->findBySlug($slug);
        
        $this->set('act',$this->Page->findById($q['Update']['act_id']));
        $this->set('pages',$q);
    }
    public function allUpdates()
    {
        
        $this->loadModel('Update');        
        //$q = $this->Update->find('all',array('order'=>'id DESC'));
        $this->paginate= array('order'=>'id DESC','limit'=>'10');
        $q = $this->paginate('Update');
        $this->set('updates',$q);
    }
    
    public function projects($slug=null)
    {
        $this->loadModel('Project');
        $this->loadModel('Page');
        
        $q = $this->Project->findBySlug($slug);
        
        $this->set('act',$this->Page->findById($q['Project']['act_id']));
        $this->set('pages',$q);
    }
    public function allProjects()
    {
        
        $this->loadModel('Project');        
        //$q = $this->Update->find('all',array('order'=>'id DESC'));
        $this->paginate= array('order'=>'id DESC','limit'=>'10');
        $q = $this->paginate('Project');
        $this->set('projects',$q);
    }
    
    public function media($slug,$year='')
    {
        $this->set('year',$year);
        if($year){
        $date1 = $year.'-01-01';
        $date2 = ($year+1).'-01-01';
        }
        $this->loadModel('Media');
        if(!$year)
        $this->set('media',$this->Media->find('all',array('conditions'=>array('media_type'=>$slug))));
        else
        $this->set('media',$this->Media->find('all',array('conditions'=>array('media_type'=>$slug,'`added_on` >='=>$date1,'`added_on` <'=>$date2))));
        $this->set('slug',$slug);
    }
    public function gallery($year='')
    {   
        $this->loadModel('Gallerycat');
        $cat= $this->Gallerycat->find('all',array('conditions'=>array('parent_id'=>'0')));
        $this->set('category',$cat);
        $this->set('year',$year);
        if($year){
        $date1 = $year.'-01-01';
        $date2 = ($year+1).'-01-01';
        }
        $this->loadModel('Image');
        if(!$year)
        $this->set('image',$this->Image->find('all'));
        else
        $this->set('image',$this->Image->find('all',array('conditions'=>array('`added_on` >='=>$date1,'`added_on` <'=>$date2))));
        
    }
    public function getParent($slug)
    {
        $q = $this->Page->findBySlug($slug);
        if($q['Page']['parent']!=0){
        $page = $this->Page->findById($q['Page']['parent']);
        return $page['Page']['title']. ' > ';
        }
        else
        return '';
    }
    public function getLinks()
    {
        $this->loadModel('Link');
        return $this->Link->find('all');
    }
    public function getrecent()
    {
        $this->loadModel('Media');
        return $recent = $this->Media->find('all',array('order'=>'id DESC','limit'=>3));
    }
    

    function catDetail($id)
    {   
        
       $this->loadModel('Gallerycat');
       $cat= $this->Gallerycat->find('all',array('conditions'=>array('parent_id'=>$id)));
       $this->set('category',$cat);
    }
    function getImage($id)
{
    $this->loadModel('Galleryimg');
    $q=  $this->Galleryimg->find('all',array('conditions'=>array('cat_id IN (SELECT id FROM gallerycats where id = "'.$id.'")')));
    
    if($q)
    return $q;
    else
    return 'noimage.png';

    
   
}
    
   
}

