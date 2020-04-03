<?php

declare (strict_types = 1);

namespace Yesccx\ThinkValidate\Command;

use Hyperf\Command\Annotation\Command;
use Hyperf\Command\Command as HyperfCommand;
use Symfony\Component\Console\Input\InputOption;

/**
 * @Command
 */
class ThinkValidateCommand extends HyperfCommand {

    /**
     * 执行的命令行
     *
     * @var string
     */
    protected $name = 'think-validate:publish';

    public function handle() {
        // 从 $input 获取 config 参数
        $argument = $this->input->getOption('config');
        if ($argument) {
            $this->copySource(__DIR__ . '/../../publish/think-validate.php', BASE_PATH . '/config/autoload/think-validate.php');
            $this->line('The think-validate configuration file has been generated', 'info');
        }
    }

    protected function getOptions() {
        return [
            ['config', NULL, InputOption::VALUE_NONE, 'Publish the configuration for think-validate'],
        ];
    }

    /**
     * 复制文件到指定的目录中
     *
     * @param $copySource
     * @param $toSource
     */
    protected function copySource($copySource, $toSource) {
        copy($copySource, $toSource);
    }

}
