<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Alumno;

class Alumnos extends Component
{
    public $alumnos,$codigo,$nombre0,$direccion,$telefono,$email,$id_alumno;
    public $modal=false;

    public function render()
    {
        $this->alumnos=Alumno::all();
        return view('livewire.alumnos');
    }
    public function crear()
    {
        $this->limpiarCampos();
        $this->abrirModal();

    }
    public function abrirModal(){
        $this->modal = true;
    }

public function cerrarModal(){
    $this->modal = false;
}
public function limpiarCampos(){
 
    $this->codigo = '';
    $this->nombre0 = '';
    $this->direccion = '';
    $this->telefono  = '';
    $this->email = '';
    $this->id_alumno ='';

}
public function editar($id)
    {
        $alumno=Alumno::findOrfail($id);
        $this->id_alumno = $id;
        $this->codigo = $alumno->codigo;
        $this->nombre0 = $alumno->nombre0;
        $this->direccion = $alumno->direccion;
        $this->telefono = $alumno->telefono;
        $this->email = $alumno->email;
        $this->abrirModal();
    }
    public function borrar($id)
    {
        Alumno::find($id)->delete();
    }
  
    public function guardar()
    {

        $this->validate([
            'codigo' => 'required',
            'nombre0' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'email' => 'required',
        ]);

    //{
        Alumno::updateOrCreate(['id'=>$this->id_alumno],
        
           [

            'codigo' => $this->codigo,
            'nombre0' => $this->nombre0,
            'direccion' => $this->direccion,
            'telefono' => $this->telefono,
            'email' => $this->email,
    ]);
    $this->cerrarModal();
    $this->limpiarCampos();
    }
}
