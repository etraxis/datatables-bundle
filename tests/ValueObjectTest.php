<?php

//----------------------------------------------------------------------
//
//  Copyright (C) 2015-2022 Artem Rodygin
//
//  You should have received a copy of the GNU General Public License
//  along with the file. If not, see <http://www.gnu.org/licenses/>.
//
//----------------------------------------------------------------------

namespace DataTables;

use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \DataTables\ValueObject
 *
 * @internal
 */
final class ValueObjectTest extends TestCase
{
    /**
     * @covers ::__isset
     */
    public function testIsSet(): void
    {
        $object = new MyTestClass();

        self::assertTrue(isset($object->property));
        self::assertFalse(isset($object->unknown));
    }

    /**
     * @covers ::__get
     */
    public function testGetPropertySuccess(): void
    {
        $object   = new MyTestClass();
        $expected = mt_rand();

        $object->setProperty($expected);

        self::assertSame($expected, $object->property);
    }

    /**
     * @covers ::__get
     */
    public function testGetPropertyFailure(): void
    {
        $this->expectException(\Exception::class);

        $object = new MyTestClass();

        echo $object->unknown;
    }

    /**
     * @covers ::__set
     */
    public function testSetProperty(): void
    {
        $object   = new MyTestClass();
        $expected = mt_rand();
        $ignored  = mt_rand();

        self::assertNotSame($expected, $ignored);

        $object->setProperty($expected);
        $object->property = $ignored;

        self::assertSame($expected, $object->property);
    }
}
