<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\studModel;
use App\Models\secModel;
class MainController extends BaseController
{
    public function delete($data)
    {
        $main = new studModel();
        $main->delete($data);
        return redirect()->to('/test');
    }
    
    
    public function updates(){
  
        $data =[
            'StudName' => $this->request->getPost('StudName'),
            'StudGender' => $this->request->getPost('StudGender'),
            'StudCourse' => $this->request->getPost('StudCourse'),
            'StudSection' => $this->request->getPost('StudSection'),
            'StudYear' => $this->request->getPost('StudYear'),
            'Section' => $this->request->getPost('Section'),
        ];
        $main = new studModel();
        $main->set($data)->where($data)->update();
        return redirect()->to('/test');
    }
    public function update($ID)
    {
        $main = new studModel();
        
        $data = [ 
            'main' => $main -> findAll(),
            'd'=> $main->find($ID),
        ];
        return view('main', $data);
    }

    public function save()
    {
        $ID = $this->request->getPost('ID');
        $data = [
            'StudName' => $this->request->getPost('StudName'),
            'StudGender' => $this->request->getPost('StudGender'),
            'StudCourse' => $this->request->getPost('StudCourse'),
            'StudSection' => $this->request->getPost('StudSection'),
            'StudYear' => $this->request->getPost('StudYear'),
            'Section' => $this->request->getPost('Section'),
        ];
        
        $main = new studModel();

        if (!empty($ID)){
            $main->update($ID, $data);
        }
        else 
        {
            $main->save($data);
        }

        return redirect()->to('/test');
    }
    public function test()
    {
        $main = new studModel();
        $data['main'] = $main->findAll();
        return view ('main', $data);
    }
    public function index()
    {
        //
    }
}