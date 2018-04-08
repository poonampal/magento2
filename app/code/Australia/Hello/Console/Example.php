<?php
namespace Australia\Hello\Console;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;

class Example extends Command{
    const NAME = 'name';
    protected function configure(){
        $option = [ 
                    new InputOption(self::NAME,null,InputOption::VALUE_REQUIRED,'Name')
                    ];
        $this->setName("example:sayhello");
        $this->setDescription('Say hello function');
        $this->setDefinition($option);
        parent::configure();
    }
    protected function execute(InputInterface $input, OutputInterface $output){
        if($name = $input->getOption(self::NAME)){
            $output->writeln('Hi '.$name);
        }else{
            $output->writeln('hi....executed');
        }
    }
}
?>
