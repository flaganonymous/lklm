<?php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use JavierEguiluz\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;
use JavierEguiluz\Bundle\EasyAdminBundle\Event\EasyAdminEvents;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;


class AdminController extends BaseAdminController
{
    public function createNewUserEntity()
    {
        return $this->get('fos_user.user_manager')->createUser();
    }

    public function prePersistUserEntity($user)
    {
        $this->get('fos_user.user_manager')->updateUser($user, false);
    }

    public function preUpdateUserEntity($user)
    {
        $this->get('fos_user.user_manager')->updateUser($user, false);
    }

    public function exportAction()
    {
        $em = $this->getDoctrine()->getManager();
        $events = $em->getRepository('AppBundle:Event')->findAll();

        $data = array();
        foreach ($events as $e) {
            $data[] = [
                'nom' => $e->getUser(),
                'Email' => $e->getTextEmail(),
                'Date de naissance' => $e->getTextDate(),
                // 'Slogan' => $e->getTextSlogan(),
                'Classe' => $e->getMyClass(),
                'Sujets favori' => $e->getMyFavoriteSubject(),
                'Meilleures notes' => $e->getMyBestNotation(),
                'Mes diplômes' => $e->getMyDiploma(),
                'Mes prix' => $e->getMyReward(),
                'Mes stages' => $e->getMyTrainer(),
                'Mon film préfére' => $e->getMyMovie(),
                'Ma citation préférée ' => $e->getMyCitation(),
                'Mes valeurs' => $e->getMyValue(),
                // 'Mes centres interets' => $e->getMyInterest(),
                'Mes hobby' => $e->getMyHobby(),
                'Mon métier de rève' => $e->getTextReve(),
                // 'Action' => $e->getAction(),
                // 'Date/Heure' => $e->getCreation()->format('Y-m-d H:i'),
                // 'Altercation' => $e->getAltercation()
            ];
        }

        $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject();


        $phpExcelObject->getActiveSheet()->setTitle('Signalements');
        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $phpExcelObject->setActiveSheetIndex(0);

        $letters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'H', 'K', 'L', 'M', 'N'];
        $col = 0;
        // Set headers
        foreach ($data[0] as $key => $value) {
            $phpExcelObject->setActiveSheetIndex(0)->setCellValue($letters[$col] . '1', $key);
            $col++;
        }
        // Set datas
        foreach ($data as $r => $row) {
            $col = 0;
            foreach ($row as $key => $value) {
                $phpExcelObject->setActiveSheetIndex(0)->setCellValue($letters[$col] . ($r + 2), $value);
                $col++;
            }

        }
        $d = new \DateTime();
        // create the writer
        $writer = $this->get('phpexcel')->createWriter($phpExcelObject, 'Excel5');
        // create the response
        $response = $this->get('phpexcel')->createStreamedResponse($writer);
        // adding headers
        $dispositionHeader = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'pimms_signalements_' . $d->format('d-m-Y') . '.xls'
        );
        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');
        $response->headers->set('Content-Disposition', $dispositionHeader);

        return $response;

    }
}
