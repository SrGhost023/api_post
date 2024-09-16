<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Publicacion;

class PublicacionController extends Controller {
    public function ListarTodas() {
        return Publicacion::all();
    }
    public function ListarUna($id) {
        return Publicacion::findOrFail($id);
    }
    public function Crear(Request $request) {
        $publicacionCreada = new Publicacion();
        $publicacionCreada -> id_usuario = $request -> post('id_usuario');
        $publicacionCreada -> texto = $request -> post('texto');
        $publicacionCreada -> url = $request -> post('url');
        $publicacionCreada -> save();

        return $publicacionCreada;
    }
    public function Modificar($id, Request $request) {
        $publicacionModificada = Publicacion::findOrFail($id);

        $publicacionModificada -> id_usuario = $request -> post('id_usuario');
        $publicacionModificada -> texto = $request -> post('texto');
        $publicacionModificada -> url = $request -> post('url');
        $publicacionModificada -> save();

        return $publicacionModificada;
    }
    public function Eliminar($id) {
        $publicacionEliminada = Publicacion::findOrFail($id);
        $publicacionEliminada -> delete();

        return ['mensaje' => 'Se eliminó éxitosamente'];
    }
}