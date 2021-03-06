<?php

namespace TDD;
use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    private $queue;

    public function setUp():void
    {
        $this->queue = new Queue();
    }

    public function tearDown():void /* The :void return type declaration that should be here would cause a BC issue */
    {
        unset($this->queue);
    }


    /**
     * Test if the queue is empty to begin with
     */
    public function testNewQueueIsEmpty()
    {
        $this->assertEquals(0, $this->queue->getCount());
    }


    /**
     * Test if an item has added to the queue
     */
    public function testAnItemAddedToTheQueue()
    {
        $this->queue->push("one");
        $this->assertEquals(1,$this->queue->getCount());

        return $this->queue;
    }


    /**
     * Test if an item has been removed from the queue
     */
    public function testAnItemRemovedFromTheQueue()
    {
        $this->queue->push("one");
        $item = $this->queue->pop();

        $this->assertEquals(0,$this->queue->getCount());
        $this->assertEquals('one', $item);
    }

    public function testAnItemIsRemovedFromTheFrontOfTheQueue()
    {
        $this->queue->push('first');
        $this->queue->push('second');
        $first = $this->queue->pop();
        self::assertEquals('first', $first);
    }
}