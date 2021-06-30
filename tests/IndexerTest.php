<?php

namespace Swis\Laravel\Fulltext\Tests;

use Mockery;
use Swis\Laravel\Fulltext\Indexer;
use Swis\Laravel\Fulltext\Tests\Fixtures\TestModel;

class IndexerTest extends AbstractTestCase
{
    public function testIndexModel()
    {
        $indexer = new Indexer();
        $model = Mockery::mock(TestModel::class);
        $model->shouldReceive('indexRecord');
        $indexer->indexModel($model);
    }
}
