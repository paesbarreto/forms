<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <!--
    *******************************************************************************
    *     JBWEBMASTER - Gerar um documento em PDF usando a biblioteca FPDF        *
    *                AUTOR: JOAO BATISTA DANTAS BEZERRA JUNIOR                    *
    *                E-MAIL: jbtrab@gmail.com                                     *
    *                        DATA: 28/09/2010                                     *
    *******************************************************************************
    -->
    <head>
        <?php include_once 'MetasTags.php'; ?>
        <title>Gerar um documento em PDF usando a biblioteca FPDF.</title>
        <!--ESTILO DA PAGINA FORMULARIO-->
        <link href="estilo.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="cabecalho">
            <h2>Gerar um documento em PDF usando a biblioteca FPDF.</h2>
            <div class="contato"><a href="https://jbwebmaster.wordpress.com/" title="Voltar para P&aacute;gina inicial">
                    Natal/RN 2010 - Desenvolvido por: Jo&atilde;o Batista Dantas B. J&uacute;nior - JBWEBMASTER -
                    CONTATO/D&Uacute;VIDAS: jbtrab@gmail.com</a></div>
        </div>
        <div class="central">
            <div class="frmManut">
                <form method="post" action="PaginaPdf.php" name="frmLista" target="blank">
 
                    <div class="titulo">Documento da Empresa X</div>
                    <div class="colunaUmLinhaUm">
                        <p>
                            <label for="numeroProcesso">N&uacute;mero do Processo:</label>
                            <br />
                            <input type="text" name="numeroProcesso" value="" />
                        </p>
                        <p>
                            <label for="notaFiscal">N&uacute;mero Nota Fiscal:</label>
                            <br />
                            <input type="text" name="notaFiscal" value="" />
                        </p>
                        <p>
                            <label for="nomeEmpresa">Nome da Empresa:</label>
                            <br />
                            <input type="text" class="nomeEmpresa" name="nomeEmpresa" value="" />
                        </p>
                    </div>
                    <div class="colunaDoisLinhaUm">
                        <p>
                            <label for="numeroFolhas">N&uacute;mero das Folhas:</label>
                            <br />
                            <input type="text" name="numeroFolhas" value="" />
                        </p>
                        <p>
                            <label for="dataDoc">Data do Documento:</label>
                            <br />
                            <input type="text" class="dataDoc" name="dataDoc" value="" />
                        </p>
                        <p>
                            <label for="nomeResponsavel">Nome do Respons&aacute;vel:</label>
                            <br />
                            <input type="text" class="nomeResponsavel" name="nomeResponsavel" value="" />
                        </p>
                    </div>
                    <div class="colunaTresLinhaUm">
                        <p>
                            <label for="TipoResponsavel">Tipo do Respons&aacute;vel:</label>
                            <br />
                            <select name="TipoResponsavel">
                                <option>Estagi&aacute;rio</option>
                                <option>Contratado</option>
                            </select>
                        </p>
                        <p>
                            <label for="matricula">Matr&iacute;cula:</label>
                            <br />
                            <input type="text" class="matricula" name="matricula" value="" />
                        </p>
                    </div>
                    <p>
                        <span><input type="submit" value="Gerar o Documento em PDF" name="enviar" /></span>
                    </p>
                </form>
            </div>
        </div>
        <div class="rodape">
           Natal/RN 2010 - Desenvolvido por: Jo&atilde;o Batista Dantas B. J&uacute;nior - JBWEBMASTER - CONTATO/D&Uacute;VIDAS: jbtrab@gmail.com
        </div>
    </body>
</html>
