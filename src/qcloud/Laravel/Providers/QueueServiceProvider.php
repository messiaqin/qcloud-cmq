<?php namespace Messiaqin\QcloudCmq\Laravel\Providers;

use Messiaqin\QcloudCmq\Laravel\Queue\CMQConnector;
use Illuminate\Queue\QueueServiceProvider as QueueSProvider;

/**
 * QueueServiceProvider:
 * @date 2022/6/17
 * @time 16:18
 * @author Ray.Zhang <codelint@foxmail.com>
 **/
class QueueServiceProvider extends QueueSProvider {
    public function registerConnectors($manager)
    {
        parent::registerConnectors($manager);

        $manager->addConnector('cmq', function () {
            return new CMQConnector();
        });
    }
}