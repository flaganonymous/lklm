<?php
namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand as Command;
use Symfony\Component\Console\Input\InputInTERface;
use Symfony\Component\Console\Output\OutputInTERface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class ExportEventsCommand extends Command
{
    protected function configure()
    {
        $this
        ->setName('app:export-events')
        ->setDescription('Export events.')
        ->setHelp('This command allows you to export events')
        ->addArgument('path', InputArgument::REQUIRED, 'The output path of the exported file')
        ->addOption('network', 'w', InputOption::VALUE_REQUIRED, 'The network you want to export datas, either <info>DIVIA</info> or <info>TER</info>')
        ->addOption('start', null, InputOption::VALUE_REQUIRED, 'The date from which request datas <info>yyyy-mm-dd</info>')
        ->addOption('end', null, InputOption::VALUE_REQUIRED, 'The date to which request datas <info>yyyy-mm-dd</info>')
        ;
    }

    protected function execute(InputInTERface $input, OutputInTERface $output)
    {
        $path = $input->getArgument('path');
        $network = $input->getOption('network');
        $start = $input->getOption('start');
        $end = $input->getOption('end');

        if ($network) {
            if ($network !== 'DIVIA' && $network !== 'TER') {
                $output->writeln('<error>Possible options are `DIVIA` or `TER`</error>');
                exit();
            }
        }

        $start = ($start) ? new \DateTime($start) : date('Y-m-01', time());
        $end = ($end) ? new \DateTime($end) : date('Y-m-t', time());

        if (file_exists($path)) {
            $pathParts = pathinfo($path);
            for ($i=1; $i < 99; $i++) {
                $newPath = $pathParts['dirname'] .
                '/' . $pathParts['filename'] .
                '_' . $i . (isset($pathParts['extension']) ? '.' . $pathParts['extension'] : '');
                if (!file_exists($newPath)) {
                    $path = $newPath;
                    break;
                }
            }
        }

        $q = $this->getContainer()->get('doctrine')
        ->getManager()
        ->getRepository('AppBundle:Event')
        ->createQueryBuilder('e')
        ->where('e.codename != :null')
        ->andWhere('e.creation <= :end')
        ->andWhere('e.creation >= :start')
        ->setParameters(['null' => null, 'end' => $end, 'start' => $start]);

        if($network) {
            $q = $q->andWhere('e.network = :network')
            ->setParameter('network', $network);
        }

        $events = $q->getQuery()
                    ->getResult();

        $datas = array();
        foreach ($events as $e) {
            $datas[] = ['id' => $e->getId(),
                        'user' => ($e->getUser() ?: '-'),
                        'network' => ($e->getNetwork() ?: '-'),
                        'line' => ($e->getLine() ?: '-'),
                        'stop' => ($e->getStop() ?: '-'),
                        'code' => ($e->getCode() ?: '-'),
                        'codename' => ($e->getCodename() ?: '-'),
                        'vehicule' => ($e->getVehicule() ?: '-'),
                        'age' => ($e->getAge() ?: '-'),
                        'gender' => ($e->getGender() ?: '-'),
                        'mood' => ($e->getMood() ?: '-'),
                        'duration' => ($e->getDuration() ?: '-'),
                        'comment' => ($e->getComment() ?: '-'),
                        'action' => ($e->getAction() ?: '-'),
                        'creation' => ($e->getCreation()->format('d/m/Y h:i:s') ?: '-'),
                        'altercation' => ($e->getAltercation() ?: '-'),
                        'category' => (($e->getCategory() ? implode(', ', $e->getCategory()) : '-'))
                    ];
        }
        $datas = $this->getContainer()->get('serializer')->normalize($datas, null);
        file_put_contents($path, $this->getContainer()->get('serializer')->encode($datas, 'csv'));
        $output->writeln('Datas exported to ' . $path);
    }
}
