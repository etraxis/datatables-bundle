<?php

//----------------------------------------------------------------------
//
//  Copyright (C) 2015-2022 Artem Rodygin
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
 * @coversDefaultClass \DataTables\DataTableException
 *
 * @internal
 */
final class DataTableExceptionTest extends TestCase
{
    /**
     * @covers ::__construct
     */
    public function testConstructor(): void
    {
        $expectedMessage = 'Error message';
        $expectedCode    = mt_rand();

        $object = new DataTableException($expectedMessage, $expectedCode);

        self::assertSame($expectedMessage, $object->getMessage());
        self::assertSame($expectedCode, $object->getCode());
    }
}
