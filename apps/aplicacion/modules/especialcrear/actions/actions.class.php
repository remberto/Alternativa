<?php

/**
 * especialcrear actions.
 *
 * @package    alternativa
 * @subpackage especialcrear
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class especialcrearActions extends sfActions
{
    public function preExecute()
  {
    $c = new ControlSistema('ESP-CRC',$this->getUser()->getAttribute('USUARIO_ID'));
    $this->forwardUnless($c->control(),'login','index');
  }

 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
     $this->unidades = Doctrine::getTable('DatRueUnidadEducativa')->getUnidadesEducativasAsignadasEspecial($this->getUser()->getAttribute('USUARIO_ID'),$this->getUser()->getAttribute('GESTION'));
     $this->niveles = Doctrine::getTable('ClaCiclo')->findByNivelId('16');
  }

  public function executeGrado(sfWebRequest $request)
  {
     $this->grados = Doctrine::getTable('ClaGrado')->findByNivelIdAndCicloId('16',$request->getParameter('nivel_id'));
  }

  public function executeGuardarcurso(sfWebRequest $request)
  {
     $conn = Doctrine_Manager::connection();
     $conn->beginTransaction();
     //try {
         //die($request->getParameter('ue_id').'/'.$request->getParameter('subcea_id').'/'.$request->getParameter('periodo_id'));
         $curso = new DatEspCurso();
         $curso->setCodUeId($request->getParameter('ue_id'));
         $curso->setSubCeaId(0);
         $curso->setGestionId($this->getUser()->getAttribute('GESTION'));
         $curso->setOperativoId('1');
         $curso->setPeriodoId('1');
         $curso->setNivelId('16');
         $curso->setCicloId($request->getParameter('nivel_id'));
         $curso->setGradoId($request->getParameter('grado_id'));
         $curso->setParalelo($request->getParameter('paralelo_id'));
         $curso->setMultigrado('0');
         $curso->setTurnoId($request->getParameter('turno_id'));
         $curso->setDiscapacidadId($request->getParameter('discapacidad_id'));
         $curso->save();

         /*$control = new CtrSieCurso();
         $control->setCodUeId($request->getParameter('ue_id'));
         $control->setSubCeaId($request->getParameter('subcea_id'));
         $control->setGestionId($this->getUser()->getAttribute('GESTION'));
         $control->setOperativoId('1');
         $control->setPeriodoId($request->getParameter('periodo_id'));
         $control->setNivelId($request->getParameter('modalidad_id'));
         $control->setCicloId($request->getParameter('nivel_id'));
         $control->setGradoId($request->getParameter('grado_id'));
         $control->setParalelo($request->getParameter('paralelo_id'));
         $control->setTurnoId($request->getParameter('turno_id'));
         $control->setFechaCreacion(date('Y-m-d H:i:s'));
         $control->setUserId($this->getUser()->getAttribute('USUARIO_ID'));
         $control->save();*/

         $this->getUser()->setFlash('notice',"EL CURSO SE CREO SATISFACTORIAMENTE");
         $conn->commit();
      /*} catch (Doctrine_Exception $e) {
         $conn->rollback();
         $this->getUser()->setFlash('notice_error', "HUBO UN ERROR AL CREAR EL CURSO");
      }*/
      $this->redirect('especialcrear/index');
  }

}
