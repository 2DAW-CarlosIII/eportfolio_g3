<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultadosAprendizajesController extends Controller
{
    public function getIndex()
    {
        return view('resultados-aprendizaje.index')
            ->with('resultados-aprendizaje', $this->resultadosAprendizajes);
    }

    public function getShow($id)
    {
        return view('resultados-aprendizaje.show')
            ->with('resultados-aprendizaje', $this->resultadosAprendizajes[$id])
            ->with('id', $id);

    }

    public function getCreate()
    {
        return view('resultados-aprendizaje.create');
    }

    public function getEdit($id)
    {
        return view('resultados-aprendizaje.edit')
            ->with(resultados-aprendizaje', $this->resultadosAprendizajes[$id])
            ->with('id', $id);
    }


    /*private $familiasProfesionales = array(
        array('codigo' => 'ADG','nombre' => 'ACTIVIDADES FÍSICAS Y DEPORTIVAS'),
        array('codigo' => 'AFD','nombre' => 'ADMINISTRACIÓN Y GESTIÓN'),
        array('codigo' => 'AGA','nombre' => 'AGRARIA'),
        array('codigo' => 'ARA','nombre' => 'ARTES Y ARTESANÍAS'),
        array('codigo' => 'ARG','nombre' => 'ARTES GRÁFICAS'),
        array('codigo' => 'COM','nombre' => 'COMERCIO Y MARKETING'),
        array('codigo' => 'ELE','nombre' => 'ELECTRICIDAD Y ELECTRÓNICA'),
        array('codigo' => 'ENA','nombre' => 'ENERGÍA Y AGUA'),
        array('codigo' => 'EOC','nombre' => 'EDIFICACIÓN Y OBRA CIVIL'),
        array('codigo' => 'FME','nombre' => 'FABRICACIÓN MECÁNICA'),
        array('codigo' => 'HOT','nombre' => 'HOSTELERÍA Y TURISMO'),
        array('codigo' => 'IEX','nombre' => 'INDUSTRIAS EXTRACTIVAS'),
        array('codigo' => 'IFC','nombre' => 'INFORMÁTICA Y COMUNICACIONES'),
        array('codigo' => 'IMA','nombre' => 'INSTALACIÓN Y MANTENIMIENTO'),
        array('codigo' => 'IMP','nombre' => 'IMAGEN PERSONAL'),
        array('codigo' => 'IMS','nombre' => 'IMAGEN Y SONIDO'),
        array('codigo' => 'INA','nombre' => 'INDUSTRIAS ALIMENTARIAS'),
        array('codigo' => 'MAM','nombre' => 'MADERA, MUEBLE Y CORCHO'),
        array('codigo' => 'MAP','nombre' => 'MARITÍMO-PESQUERA'),
        array('codigo' => 'QUI','nombre' => 'QUÍMICA'),
        array('codigo' => 'SAN','nombre' => 'SANIDAD'),
        array('codigo' => 'SEA','nombre' => 'SEGURIDAD Y MEDIO AMBIENTE'),
        array('codigo' => 'SSC','nombre' => 'SERVICIOS SOCIOCULTURALES Y A LA COMUNIDAD'),
        array('codigo' => 'TCP','nombre' => 'TEXTIL, CONFECCIÓN Y PIEL'),
        array('codigo' => 'TMV','nombre' => 'TRANSPORTE Y MANTENIMIENTO DE VEHÍCULOS'),
        array('codigo' => 'VIC','nombre' => 'VIDRIO Y CERÁMICA')
    );*/
}
