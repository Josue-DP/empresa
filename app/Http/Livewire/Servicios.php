<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Servicio;

class Servicios extends Component
{
    public $servicios,$nombre,$descripcion,$cliente,$direccion,$precio,$fecha, $id_servicio;
    public $modal = false;

    public function render()
    {
        $this->servicios = Servicio::all();
        return view('livewire.servicios');
    }

    public function crear()
    {
        $this->limpiarCampos();
        $this->abrirModal();
        return view('livewire.crear');
    }

    public function abrirModal() {
        $this->modal = true;
    }
    public function cerrarModal() {
        $this->modal = false;
    }
    public function limpiarCampos(){
        $this->nombre='';
        $this->descripcion='';
        $this->cliente='';
        $this->direccion='';
        $this->precio='';
        $this->fecha='';
        $this->id_servicio='';
    }
    public function editar($id)
    {
        $servicio = Servicio::findOrFail($id);
        $this->id_servicio = $id;
        $this->nombre = $servicio->nombre;
        $this->descripcion = $servicio->descripcion;
        $this->cliente = $servicio->cliente;
        $this->direccion = $servicio->direccion;
        $this->precio = $servicio->precio;
        $this->fecha = $servicio->fecha;
        $this->abrirModal();
    }

    public function borrar($id)
    {
        Servicio::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }

    public function guardar()
    {
        Servicio::updateOrCreate(['id'=>$this->id_servicio],
            [
                'nombre' => $this->nombre,
                'descripcion' => $this->descripcion,
                'cliente' => $this->cliente,
                'direccion' => $this->direccion,
                'precio' => $this->precio,
                'fecha' => $this->fecha
            ]);
         
         session()->flash('message',
            $this->id_servicio ? '¡Actualización exitosa!' : '¡Alta Exitosa!');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }
}
