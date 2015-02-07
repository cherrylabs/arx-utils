<?php

/**
 * Class HtmlTest
 */
class HtmlTest extends PHPUnit_Framework_TestCase {

    public function testAttributes()
    {
        $test = \Arx\Utils\Html::attributes(array('class' => 'test'));

        $this->assertSame(' class="test"', $test, "Should be output class=\"test\" identique");

    }

}
