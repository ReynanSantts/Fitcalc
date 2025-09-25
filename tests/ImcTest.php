<?php

use Controller\ImcController;
use PHPUnit\Framework\TestCase;

class ImcTest extends TestCase
{

    // IRA FAZER A REFERENCIA A CLASSE IMCCONTROLLER
    // Responsavel por realizar a comunicação com o banco de dados
    // e a logica da aplicação
    private $imcController;

    protected function setUp(): void{
        $this->imcController = new ImcController();
    }

    // Verificar o calculo do IMC
    #[PHPUnit\Framework\Attributes\Test]
    public function it_should_be_able_to_calculate_bmi()
    {
        $weight = 68;
        $height = 1.68;

        $imcResult = $this->imcController->calculateImc($weight, $height);

        $this->assertArrayHasKey("imc",$imcResult);
        $this->assertArrayHasKey("BMIrange",$imcResult);

        $this->assertEquals(24.09,$imcResult['imc']);
        $this->assertEquals('Peso normal',$imcResult['BMIrange']);
    }

    // Verificar a validação/retorno de campos invalidos
    #[PHPUnit\Framework\Attributes\Test]
    public function it_shouldnt_be_able_to_calculate_bmi_invalid_inputs()
    {
    }

    #[PHPUnit\Framework\Attributes\Test]
    public function it_shouldnt_be_able_to_calculate_bmi_with_null_or_empty_inputs()
    {
    }

    // OBTER O IMC E CLASSIFICAR
    #[PHPUnit\Framework\Attributes\Test]
    public function it_should_be_able_to_get_an_bmi_range()
    {
    }

    // Salvar o IMC
    #[PHPUnit\Framework\Attributes\Test]
    public function it_should_be_able_to_save_bmi()
    {
    }

}