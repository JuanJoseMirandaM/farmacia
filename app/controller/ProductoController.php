<?php


use App\Model\Producto;

class ProductoController
{
    public function index(){
        $productos = Producto::all();
        //var_dump($productos);
        return Vista::crear("admin.producto.index",array(
            "productos"=>$productos,
        ));
    }

    public function todos(){
        $productos = Producto::all();
        echo json_response($productos);
    }

    public function nuevo(){
        return Vista::crear("admin.producto.crear");
    }

    public function agregar(){
        try{
            if (!empty($_POST)){
                $producto = new Producto();
                if(input('producto_id')){
                    $producto = Producto::find(input('producto_id'));
                }
                $producto->cod = input("codigo");
                $producto->nombre = input("nombre");
                $producto->peso = input("peso");
                $producto->precio = input("precio");
                $producto->cantidad = input("cantidad");
                $producto->guardar();

                redirecciona()->to("producto");
            }

        }catch (Exception $e){
            echo $e->getMessage();
        }

    }
    /*
     * metodo para editar producto
     * @param int $id id producto
     * @return redirect
     * */
    public function editar($id){
        $producto = Producto::where("id",$id);
        //User::find($id);
        //var_dump(strlen($usuario));
        if(count($producto)){
            return Vista::crear("admin.producto.crear", array("producto"=>$producto[0]));
        }else {
            return redirecciona()->to("producto");
        }
    }

    public function eliminar($id){
        $producto = Producto::where("id",$id);
        //User::find($id);
        if(count($producto)){
            $producto[0]->eliminar();
            return redirecciona()->to("producto");
        }else {
            return redirecciona()->to("producto");
        }
    }
}