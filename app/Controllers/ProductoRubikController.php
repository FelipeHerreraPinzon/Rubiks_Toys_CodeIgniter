<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProductoRubik;
class ProductoRubikController extends Controller{
    public function index()
    {
        $rubik  = new ProductoRubik();

        $datos['productos'] = $rubik->findAll();

        $datos['header'] =  view('layouts/header');

        $datos['footer'] =  view('layouts/footer');      

        return view('rubik/productos', $datos );
    }

    public function crear()
    {
        
        $datos['header'] =  view('layouts/header');

        $datos['footer'] =  view('layouts/footer');

        return view('rubik/crear_producto', $datos);
    }

    public function guardar(){

        $rubik  = new ProductoRubik();

        $validacion = $this->validate([
            'nombre'=>'required|min_length[3]',
            'descripcion'=>'required|min_length[3]',
            'imagen' => [
                'uploaded[imagen]',
                'mime_in[imagen,image/jpg,image/jpeg,image/png]',
                'max_size[imagen,1024]',
            ]
        ]);

        

        $nombre = $this->request->getVar('nombre');
        $descripcion = $this->request->getVar('descripcion');

        if($imagen=$this->request->getFile('imagen')){
           $nuevoNombre = $imagen->getRandomName();
           $imagen->move('../public/uploads/', $nuevoNombre);
           $datos=[
            'nombre'=>$nombre,
            'descripcion'=>$descripcion,
            'imagen'=>$nuevoNombre
           ];

           $rubik->insert($datos);
        }

        return $this->response->redirect(site_url('/'));

    }

    public function borrar($id){

        $rubik  = new ProductoRubik();

        $datosRubik = $rubik->where('id', $id)->first();

        $ruta = ('../public/uploads/'.$datosRubik['imagen']);

        unlink($ruta);

        $rubik->where('id', $id)->delete($id);

        return $this->response->redirect(site_url('/'));


    }

    public function editar($id){

        $rubik  = new ProductoRubik();

        $datos['producto']=$rubik->where('id', $id)->first();

        $datos['header'] =  view('layouts/header');

        $datos['footer'] =  view('layouts/footer');



        return view('rubik/editar_producto', $datos);
    }



    public function actualizar(){

        $rubik  = new ProductoRubik();

        $nombre = $this->request->getVar('nombre');

        $descripcion = $this->request->getVar('descripcion');

        $datos=[
            'nombre'=>$nombre,
            'descripcion'=>$descripcion
           ];

        $id = $this->request->getVar('id');   

        $rubik->update($id, $datos);   

        $validacion = $this->validate([
            'imagen' => [
                'uploaded[imagen]',
                'mime_in[imagen,image/jpg,image/jpeg,image/png]',
                'max_size[imagen,1024]',
            ]
        ]);

            if($validacion){

                if($imagen=$this->request->getFile('imagen')){
                    

                    $datosRubik = $rubik->where('id',$id)->first();

                    $ruta = ('../public/uploads/'.$datosRubik['imagen']);

                    unlink($ruta);

                    $nuevoNombre = $imagen->getRandomName();
                    $imagen->move('../public/uploads/', $nuevoNombre);
                       
                    $datos=['imagen'=>$nuevoNombre];
                     
                    
         
                    $rubik->update($id, $datos);
                 }
            }

            return $this->response->redirect(site_url('/'));

        
    }





















}