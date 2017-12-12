<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/keolis", name="keolis")
     */
    public function keolisAction(Request $request)
    {
        $start = ($request->get('start')) ? new \DateTime($request->get('start')) : date('Y-m-01', time());
        $end = ($request->get('end')) ? new \DateTime($request->get('end')) : date('Y-m-t', time());
        $datas = $this->queries('DIVIA', $start, $end, null);

        return $this->render('dashboard/keolis.html.twig', [
            'codes' => $datas['codes'],
            'ages' => $datas['ages'],
            'genders' => $datas['genders'],
            'actions' => $datas['actions'],
            'durations' => $datas['durations'],
            'start' => $start,
            'end' => $end
        ]);
    }

    /**
     * @Route("/sncf", name="sncf")
     */
    public function sncfAction(Request $request)
    {
        $start = ($request->get('start')) ? new \DateTime($request->get('start')) : date('Y-m-01', time());
        $end = ($request->get('end')) ? new \DateTime($request->get('end')) : date('Y-m-t', time());
        $line = ($request->get('line')) ? $this->getLineName($request->get('line')) : null;
        $datas = $this->queries('DIVIA', $start, $end, $line);

        return $this->render('dashboard/sncf.html.twig', [
            'line' => $line,
            'lines' => $this->getLinesByNetwork(1),
            'codes' => $datas['codes'],
            'ages' => $datas['ages'],
            'genders' => $datas['genders'],
            'actions' => $datas['actions'],
            'durations' => $datas['durations'],
            'moods' => $datas['moods'],
            'categories' => $datas['categories'],
            'start' => $start,
            'end' => $end
        ]);
    }

    /**
     * @Route("/download/{network}/{start}/{end}", name="download")
     */
    public function downloadAction($network, $start, $end)
    {
        $start = new \DateTime($start);
        $end = new \DateTime($end);
        $datas = $this->queries($network, $start, $end, null);
        
        // ask the service for a Excel5
        $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject();

        $phpExcelObject->getProperties()
            ->setCreator("PIMMS")
            ->setLastModifiedBy("PIMMS")
            ->setTitle("Export données " . $network);

        if ($datas['genders']) {
            $phpExcelObject->setActiveSheetIndex(0)
                ->setCellValue('A1', 'Sexe')
                ->setCellValue('B1', 'Effectifs');
            foreach ($datas['genders'] as $k => $g) {
                $phpExcelObject->setActiveSheetIndex(0)
                    ->setCellValue('A' . ($k + 2), $g['gender'])
                    ->setCellValue('B' . ($k + 2), $g['genderCount']);
            }
        }

        if ($datas['ages']) {
            $phpExcelObject->setActiveSheetIndex(0)
                ->setCellValue('D1', 'Age')
                ->setCellValue('E1', 'Effectifs');
            foreach ($datas['ages'] as $k => $g) {
                $phpExcelObject->setActiveSheetIndex(0)
                    ->setCellValue('D' . ($k + 2), $g['age'])
                    ->setCellValue('E' . ($k + 2), $g['ageCount']);
            }
        }

        if ($datas['durations']) {
            $phpExcelObject->setActiveSheetIndex(0)
                ->setCellValue('G1', 'Durée')
                ->setCellValue('H1', 'Effectifs');
            foreach ($datas['durations'] as $k => $g) {
                $phpExcelObject->setActiveSheetIndex(0)
                    ->setCellValue('G' . ($k + 2), $g['duration'])
                    ->setCellValue('H' . ($k + 2), $g['durationCount']);
            }
        }

        if ($datas['actions']) {
            $phpExcelObject->setActiveSheetIndex(0)
                ->setCellValue('A10', 'Type d\'action')
                ->setCellValue('B10', 'Effectifs');
            foreach ($datas['actions'] as $k => $g) {
                $phpExcelObject->setActiveSheetIndex(0)
                    ->setCellValue('A' . ($k + 11), $g['action'])
                    ->setCellValue('B' . ($k + 11), $g['actionCount']);
            }
        }

        if ($datas['moods']) {
            $phpExcelObject->setActiveSheetIndex(0)
                ->setCellValue('D10', 'Ambiance')
                ->setCellValue('E10', 'Effectifs');
            foreach ($datas['moods'] as $k => $g) {
                $phpExcelObject->setActiveSheetIndex(0)
                    ->setCellValue('D' . ($k + 11), $g['mood'])
                    ->setCellValue('E' . ($k + 11), $g['moodCount']);
            }
        }

        if ($datas['categories']) {
            $phpExcelObject->setActiveSheetIndex(0)
                ->setCellValue('G10', 'Catégorie d\'action')
                ->setCellValue('H10', 'Effectifs');
            foreach ($datas['categories'] as $k => $g) {
                $phpExcelObject->setActiveSheetIndex(0)
                    ->setCellValue('G' . ($k + 11), $g['category'][0])
                    ->setCellValue('H' . ($k + 11), $g['categoryCount']);
            }
        }


        $phpExcelObject->getActiveSheet()->setTitle('Stats');
        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $phpExcelObject->setActiveSheetIndex(0);

        // create the writer
        $writer = $this->get('phpexcel')->createWriter($phpExcelObject, 'Excel5');
        // create the response
        $response = $this->get('phpexcel')->createStreamedResponse($writer);
        // adding headers
        $dispositionHeader = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'pimms_stats_' . $network . '_' . $start->format('d-m-Y') . '-' . $end->format('d-m-Y') . '.xls'
        );
        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');
        $response->headers->set('Content-Disposition', $dispositionHeader);

        return $response;
    }

    private function queries($network, $start, $end, $line)
    {
        $rp = $this->getDoctrine()->getRepository('AppBundle:Event');

        $andWhereLine = null;
        $parameters = array(
            'network' => $network,
            'null' => '',
            'start' => $start,
            'end' => $end,
            'descente' => 'descente'
        );

        if ($line != null) {
            $parameters['line'] = $line;
            $andWhereLine = 'e.line = :line';
        }

        $codes = $rp->createQueryBuilder('e')
            ->select('COUNT(e.codename) AS codeCount, e.codename')
            ->where('e.network = :network')
            ->andWhere('e.codename != :null')
            ->andWhere('e.codename != :descente')
            ->andWhere('e.creation <= :end')
            ->andWhere('e.creation >= :start')
            ->andWhere($andWhereLine)
            ->setParameters($parameters)
            ->groupBy('e.codename')
            ->getQuery()
            ->getResult();

        $ages = $rp->createQueryBuilder('e')
            ->select('COUNT(e.age) AS ageCount, e.age')
            ->where('e.network = :network')
            ->andWhere('e.age != :null')
            ->andWhere('e.creation <= :end')
            ->andWhere('e.creation >= :start')
            ->andWhere('e.codename != :descente')
            ->andWhere($andWhereLine)
            ->setParameters($parameters)
            ->groupBy('e.age')
            ->getQuery()
            ->getResult();

        $genders = $rp->createQueryBuilder('e')
            ->select('COUNT(e.gender) AS genderCount, e.gender')
            ->where('e.network = :network')
            ->andWhere('e.gender != :null')
            ->andWhere('e.creation <= :end')
            ->andWhere('e.creation >= :start')
            ->andWhere('e.codename != :descente')
            ->andWhere($andWhereLine)
            ->setParameters($parameters)
            ->groupBy('e.gender')
            ->getQuery()
            ->getResult();

        $actions = $rp->createQueryBuilder('e')
            ->select('COUNT(e.action) AS actionCount, e.action')
            ->where('e.network = :network')
            ->andWhere('e.action != :null')
            ->andWhere('e.creation <= :end')
            ->andWhere('e.creation >= :start')
            ->andWhere('e.codename != :descente')
            ->andWhere($andWhereLine)
            ->setParameters($parameters)
            ->groupBy('e.action')
            ->getQuery()
            ->getResult();

        $durations = $rp->createQueryBuilder('e')
            ->select('COUNT(e.duration) AS durationCount, e.duration')
            ->where('e.network = :network')
            ->andWhere('e.duration != :null')
            ->andWhere('e.creation <= :end')
            ->andWhere('e.creation >= :start')
            ->andWhere('e.codename != :descente')
            ->andWhere($andWhereLine)
            ->setParameters($parameters)
            ->groupBy('e.duration')
            ->getQuery()
            ->getResult();

        $moods = $rp->createQueryBuilder('e')
            ->select('COUNT(e.mood) AS moodCount, e.mood')
            ->where('e.network = :network')
            ->andWhere('e.mood != :null')
            ->andWhere('e.creation <= :end')
            ->andWhere('e.creation >= :start')
            ->andWhere('e.codename != :descente')
            ->andWhere($andWhereLine)
            ->setParameters($parameters)
            ->groupBy('e.mood')
            ->getQuery()
            ->getResult();

        $categories = $rp->createQueryBuilder('e')
            ->select('COUNT(e.category) AS categoryCount, e.category')
            ->where('e.network = :network')
            ->andWhere('e.category != :null')
            ->andWhere('e.creation <= :end')
            ->andWhere('e.creation >= :start')
            ->andWhere('e.codename != :descente')
            ->andWhere($andWhereLine)
            ->setParameters($parameters)
            ->groupBy('e.category')
            ->getQuery()
            ->getResult();

        return [
            'codes' => $codes,
            'ages' => $ages,
            'genders' => $genders,
            'actions' => $actions,
            'durations' => $durations,
            'moods' => $moods,
            'categories' => $categories
        ];
    }

    private function getLinesByNetwork($network)
    {
        $rp = $this->getDoctrine()->getRepository('AppBundle:Line');

        $lines = $rp->createQueryBuilder('l')
            ->select('l.id, l.name')
            ->where('l.network = :network')
            ->setParameters(['network' => $network])
            ->orderBy('l.name')
            ->getQuery()
            ->getResult();

        return $lines;
    }

    private function getLineName($id)
    {
        $rp = $this->getDoctrine()->getRepository('AppBundle:Line');

        $line = $rp->createQueryBuilder('l')
            ->select('l.name')
            ->where('l.id = :id')
            ->setParameters(['id' => $id])
            ->getQuery()
            ->getSingleResult();

        return $line['name'];
    }
}
