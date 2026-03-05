<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class BLASTTest extends TestCase
{
    /**
     * @message: Hier wordt gecontroleerd of het programma
     * als output de tekst `Hello world` print. Let op dat
     * deze controle hoofdletter gevoelig is.
     */
    public function testProgrammaPrintHelloWorld(): void
    {
        $output = shell_exec('php -w ' . getenv('SOURCE_DIR') . 'hello.php');
        $this->assertStringContainsStringIgnoringCase('Hello world', $output);
    }
}