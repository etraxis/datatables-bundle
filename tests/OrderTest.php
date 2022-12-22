<?php

//----------------------------------------------------------------------
//
//  Copyright (C) 2015-2019 Artem Rodygin
//
//  This file is part of DataTables Symfony bundle.
//
//  You should have received a copy of the MIT License along with
//  the bundle. If not, see <http://opensource.org/licenses/MIT>.
//
//----------------------------------------------------------------------

namespace DataTables;

use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \DataTables\Order
 *
 * @internal
 */
final class OrderTest extends TestCase
{
    /**
     * @covers ::__construct
     */
    public function testConstructor(): void
    {
        $column = random_int(1, 10);
        $dir    = Order::DESC;

        $object = new Order($column, $dir);

        self::assertSame($column, $object->column);
        self::assertSame($dir, $object->dir);
    }

    /**
     * @covers ::jsonSerialize
     */
    public function testJsonSerializable(): void
    {
        $column = random_int(1, 10);
        $dir    = Order::DESC;

        $expected = json_encode([
            'column' => $column,
            'dir'    => $dir,
        ]);

        $object = new Order($column, $dir);

        self::assertSame($expected, json_encode($object));
    }
}
