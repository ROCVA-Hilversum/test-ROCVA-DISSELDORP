<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class BLASTTest extends TestCase
{

    /**
     * @message: Deze test valideert dat de tekst die wordt toegekend
     * aan de `tekst` variabele vijf keer wordt uitgeprint op een nieuwe regel.
     * De nieuwe regel kan je maken met de PHP_EOL constante.
     */
    public function testZelfdeTekstPrintVijfKeer(): void
    {
        $output = shell_exec('php -w ' . getenv('SOURCE_DIR') . 'hello2.php');
        $result = substr_count($output, '$tekst');
        $this->assertEquals(6, $result);
    }

    /**
     * @message: Deze test controleert of er een variabele aanwezig is
     * met de naam `tekst`
     */
    public function testGebruiktEenVariableMetDeNaamTekst(): void
    {
        $output = shell_exec('php -w ' . getenv('SOURCE_DIR') . 'hello.php');
        $this->assertMatchesRegularExpression('/\$tekst = (\'|")(.+)\1\s?(\.\sPHP_EOL){0,1};/', $output);
    }
}