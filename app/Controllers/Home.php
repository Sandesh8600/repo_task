<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\pdModel;
class Home extends BaseController
{
    public function index()
    {
        $model=new pdModel();
        $data['details']=$model->findall();
    return view('myview', $data);
    }

    public function add(){
        return view('addproject');
    }

    public function addproject(){
        $data=[
            'project_name' => $this->request->getVar('project_name'),
            'status'  => $this->request->getVar('status')
        ];
        $model=new pdModel();
        $r=$model->insert($data);
        if(isset($r)){
            return redirect()->to(base_url('/pd'))->with('status', 'saved successfully');
    
         }else{
            return redirect()->to(base_url('/pd'))->with('status', 'records not saved');
    
         }
    }

    public function deleteproject($id){
        $model=new pdModel();
        $r=$model->delete($id);
        if(isset($r)){
            return redirect()->to(base_url('/pd'))->with('status', 'deleted successfully');
    
         }else{
            return redirect()->to(base_url('/pd'))->with('status', 'couldnt delete the records');
    
         }
        return redirect()->to(base_url('/pd')); 
    }

    public function edit($id){
        $model=new pdModel();
        
$data['details']=  $model->find($id);
return view('updatePage', $data);
    }

    public function update($id){
        $model=new pdModel();
        $data=[
     'id' => $this->request->getvar('id'),
    'project_name' => $this->request->getVar('project_name'),
    'status' => $this->request->getVar('status'),
     'created_date' => $this->request->getVar('created_date')
        ];
       $r= $model->update($id, $data);
       if(isset($r)){
        return redirect()->to(base_url('/pd'))->with('status', 'updated successfully');

     }else{
        return redirect()->to(base_url('/pd'))->with('status', 'not able to update records');

     }
   
}
    }

