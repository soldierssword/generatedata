<?php


$LANG = array();

// Category: Special
$LANG["language"] = "Português";
$LANG["title"] = "generatedata.com";


// Category: Content
$LANG["AlphaNumeric_example_CanPostalCode"] = "(Cân. código postal)";
$LANG["AlphaNumeric_example_Password"] = "(Password)";
$LANG["AlphaNumeric_example_USZipCode"] = "(E.U. CEP)";
$LANG["AlphaNumeric_help_1"] = "Um maiúsculas <b>L</b>etter.";
$LANG["AlphaNumeric_help_10"] = "Qualquer número, 1-9.";
$LANG["AlphaNumeric_help_11"] = "A consoante (superior ou inferior).";
$LANG["AlphaNumeric_help_12"] = "Um <b>H &lt;/ b número exidecimal&gt; (0-F)";
$LANG["AlphaNumeric_help_2"] = "Um maiúsculas <b>V</b>owel.";
$LANG["AlphaNumeric_help_3"] = "A minúscula &lt;l <b>/ etter b&gt;.";
$LANG["AlphaNumeric_help_4"] = "A minúscula <b>v &lt;/ owel b&gt;.";
$LANG["AlphaNumeric_help_5"] = "A carta (superior ou inferior).";
$LANG["AlphaNumeric_help_6"] = "A vogal (superior ou inferior).";
$LANG["AlphaNumeric_help_7"] = "Um maiúsculas <b>C</b>onsonant.";
$LANG["AlphaNumeric_help_8"] = "Qualquer número, 0-9.";
$LANG["AlphaNumeric_help_9"] = "A <b>minúsculas c</b>onsonant.";
$LANG["AlphaNumeric_help_intro"] = "Este tipo de dados permite gerar seqüências aleatórias alfa-numérico. A tabela a seguir contém a lenda de caracteres para este campo. Quaisquer outros caracteres que você entra neste campo aparecerá escapados.";
$LANG["AlphaNumeric_incomplete_fields"] = "O tipo de dados alfanumérico precisa ter o formato entrou no campo de texto Opções. Corrija as seguintes linhas:";
$LANG["AlphaNumeric_name"] = "Alfanuméricos";
$LANG["AutoIncrement_help_intro"] = "Gera uma coluna que contém um número único para cada linha, incrementando, por qualquer valor que você entra. Esta opção pode ser útil para inserir os dados em um campo de banco de dados com um auto-incremento chave primária.";
$LANG["AutoIncrement_help_para2"] = "A seqüência de caracteres de espaço reservado opcional permite que você inserir o valor de incremento gerado dentro de uma seqüência, através do espaço <b>{\$INCR}</b> Por exemplo:";
$LANG["AutoIncrement_increment_c"] = "Incremento:";
$LANG["AutoIncrement_name"] = "Auto-incremento";
$LANG["AutoIncrement_placeholder_str"] = "string espaço reservado:";
$LANG["AutoIncrement_start_at_c"] = "Iniciar em:";
$LANG["City_name"] = "Cidade";
$LANG["Composite_division"] = "divisão";
$LANG["Composite_help_1"] = "O tipo de dados Composite permite combinar os dados de qualquer outra linha ou linhas, e manipulá-lo, alterá-lo, combinar a informação e muito mais. O conteúdo deve ser inscrita na linguagem templating Smarty.";
$LANG["Composite_help_2"] = "Para a saída do valor de qualquer linha, basta usar os espaços reservados <b>( \$ ROW1),  \$ row2 (),</b> etc Você não pode referir-se a linha atual - que quer derreter o servidor e / ou tornar o implode universo.";
$LANG["Composite_help_3"] = "Aqui estão alguns exemplos:";
$LANG["Composite_help_4"] = "Apresentar um valor da linha 6: <b>( \$ ROW6)</b>";
$LANG["Composite_help_5"] = "Assumindo que a linha 1 e linha 2 contêm números aleatórios, os seguintes são exemplos de algumas operações matemáticas simples:";
$LANG["Composite_help_6"] = "Se uma linha contém o número 5, a exposição  &quot;N / A&quot; , caso contrário, apenas mostrar o número.";
$LANG["Composite_help_7"] = "Por favor, consulte o <a href=\"http://www.smarty.net/\">site do Smarty</a> para obter mais informações sobre a sintaxe.";
$LANG["Composite_multiplication"] = "multiplicação";
$LANG["Composite_na"] = "N / A";
$LANG["Composite_name"] = "Composto";
$LANG["Composite_subtraction"] = "subtração";
$LANG["Constant_help_1"] = "Este tipo de dados que permite gerar uma coluna de dados que tem valores a repetir a cada linha. Aqui está um par de exemplos para dar uma idéia de como isso funciona.";
$LANG["Constant_help_2"] = "Se você quiser fornecer o valor  &quot;1 &quot; para cada linha, você pode digitar  &quot;1 &quot; no valor do (s) área e qualquer valor (&gt; 0) no campo Count Loop.";
$LANG["Constant_help_3"] = "Se você gostaria de ter 100 linhas da string  &quot;Masculino&quot;, seguido por 100 linhas da string  &quot;Female &quot; e repita, pode introduzir  &quot;100 &quot; no campo Count Loop e  &quot;Masculino | Feminino  &quot;no valor do (s) de campo.";
$LANG["Constant_help_4"] = "Se você gostaria de 5 fileiras de 1 a 10, digite  &quot;5 &quot; para o campo Loop Count, e  &quot;1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 &quot; no Valor (es) de campo.";
$LANG["Constant_help_5"] = "Tentar consertar ao redor com ele. Você começa a idéia.";
$LANG["Constant_incomplete_fields"] = "O tipo de dados Constant precisa ter as constantes a serem inseridos no campo de texto. Corrija as seguintes linhas:";
$LANG["Constant_loop_count"] = "contagem Loop:";
$LANG["Constant_name"] = "Constante";
$LANG["Constant_values"] = "Valor (es):";
$LANG["Country_limit_results"] = "Limite para os países selecionados acima";
$LANG["Country_name"] = "País";
$LANG["Date_char"] = "Char";
$LANG["Date_day"] = "Dia";
$LANG["Date_description"] = "Descrição";
$LANG["Date_example"] = "Exemplo";
$LANG["Date_format_code"] = "Formatar código:";
$LANG["Date_from"] = "De:";
$LANG["Date_help_D"] = "Uma representação textual de um dia, três letras";
$LANG["Date_help_D_example"] = "Segunda a dom";
$LANG["Date_help_F"] = "Uma representação completa textual de um mês, tal como janeiro ou Março";
$LANG["Date_help_F_example"] = "Janeiro a dezembro";
$LANG["Date_help_L"] = "Se é um ano bissexto";
$LANG["Date_help_L_example"] = "1 se for um ano bissexto, 0 caso contrário.";
$LANG["Date_help_M"] = "Uma representação textual curta de um mês, três letras";
$LANG["Date_help_M_example"] = "Jan através dezembro";
$LANG["Date_help_S"] = "Sufixo ordinal Inglês para o dia do mês, 2 caracteres st, nd, rd ou th. Funciona bem com j";
$LANG["Date_help_S_example"] = "De domingo a sábado";
$LANG["Date_help_W"] = "Número de semana ISO-8601 do ano, semana a partir de segunda-feira";
$LANG["Date_help_W_example"] = "42 (42 semanas no ano)";
$LANG["Date_help_Y"] = "A representação numérica completa um ano, 4 dígitos";
$LANG["Date_help_Y_example"] = "1999 ou 2003";
$LANG["Date_help_d"] = "Dia do mês, 2 digitos com zeros à esquerda";
$LANG["Date_help_d_example"] = "01-31";
$LANG["Date_help_intro"] = "Este tipo de dados gera aleatoriamente uma data entre as datas especificadas, e permite a formatação original do resultado. Consulte a tabela abaixo para uma lista de regras de formatação viável (estes são cribbed a partir da data PHP (padrão) opções de formatação). Dê uma olhada na lista suspensa exemplo, para selecionar as opções de formatação existentes.";
$LANG["Date_help_j"] = "Dia do mês sem zeros à esquerda";
$LANG["Date_help_j_example"] = "1-31";
$LANG["Date_help_l"] = "A representação textual completa do dia da semana";
$LANG["Date_help_l_example"] = "De domingo a sábado";
$LANG["Date_help_m"] = "Representação numérica de um mês, com zeros à esquerda";
$LANG["Date_help_m_example"] = "01 a 12";
$LANG["Date_help_n"] = "Representação numérica de um mês, sem leading zeros";
$LANG["Date_help_n_example"] = "1 a 12";
$LANG["Date_help_t"] = "Número de dias do mês em questão";
$LANG["Date_help_t_example"] = "28 a 31";
$LANG["Date_help_w"] = "Representação numérica do dia da semana";
$LANG["Date_help_w_example"] = "0 (para domingo) até 6 (para sábado)";
$LANG["Date_help_y"] = "A representação de dois dígitos do ano";
$LANG["Date_help_y_example"] = "99 ou 03";
$LANG["Date_help_z"] = "O dia do ano (a partir de 0)";
$LANG["Date_help_z_example"] = "0 a 365";
$LANG["Date_incomplete_fields"] = "Datas precisa ter o formato entrou no campo de texto Opções. Corrija as seguintes linhas:";
$LANG["Date_month"] = "Mês";
$LANG["Date_name"] = "Data";
$LANG["Date_to"] = "Para:";
$LANG["Date_week"] = "Semana";
$LANG["Date_year"] = "Ano";
$LANG["Emails_name"] = "Email";
$LANG["GUID_help"] = "Gera um único, GUID aleatório (identificador global exclusivo) da forma: XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX, onde X é qualquer dígito hexadecimal).";
$LANG["GUID_name"] = "GUID";
$LANG["LatLng_help"] = "Este tipo de dados gera uma latitude aleatórias e / ou longitude. Se ambos forem selecionados, apresenta dois separados por uma vírgula.";
$LANG["LatLng_latitude"] = "Latitude";
$LANG["LatLng_longitude"] = "Longitude";
$LANG["LatLng_name"] = "Latitude / longitude";
$LANG["List_at_most"] = "Na maioria";
$LANG["List_colours"] = "laranja vermelho | | | verde amarelo | azul | anil violeta |";
$LANG["List_companies"] = "Microsoft | Macromedia | Google | Yahoo | Lycos | Altavista | Chami | Adobe Borland | | Lavasoft | Cakewalk | Sibelius | Finale Apple Systems |";
$LANG["List_company_names"] = "Contabilidade Publicidade | Gestão de Ativos | | Relações Atendimento ao Cliente | | Finanças | Recursos Humanos | Assessoria Jurídica | Assessoria de Imprensa | Folha | Relações Públicas | Vendas | Qualidade e Pesquisa de Mercado | e Desenvolvimento | Suporte Técnico";
$LANG["List_exactly"] = "Exatamente";
$LANG["List_example_1"] = "Odd nums menos de 50";
$LANG["List_example_2"] = "Mesmo com menos de 50 nums";
$LANG["List_example_3"] = "One-Ten";
$LANG["List_example_4"] = "Primeiro nums menos de 100";
$LANG["List_example_5"] = "Cores";
$LANG["List_example_6"] = "Estado Civil";
$LANG["List_example_7"] = "Título";
$LANG["List_example_8"] = "Departamento de nomes";
$LANG["List_example_9"] = "Empresas Nomes";
$LANG["List_help"] = "Digite uma lista de itens, separados por um caractere | pipe. Em seguida, selecione se você quer <b>exatamente</b>X número de itens, ou <b>Na maioria</b>itens X da lista. Vários itens são retornados em uma lista delimitada por vírgula dos resultados.";
$LANG["List_name"] = "Lista Personalizada";
$LANG["List_one_to_ten"] = "um | dois | três | quatro | cinco | seis | sete | oito | nove | dez";
$LANG["List_prefix"] = "Dr. | Sr. | Sra. | Senhora |";
$LANG["List_relationship_states"] = "| Solteiro Casado | Divorciados | common-law";
$LANG["List_separated_by_pipe"] = "Digite os valores separados por |";
$LANG["Names_example_FemaleName"] = "Jane (nome feminino)";
$LANG["Names_example_FemaleName_Surname"] = "Jane Smith";
$LANG["Names_example_MaleName"] = "João (nome masculino)";
$LANG["Names_example_MaleName_Surname"] = "John Smith";
$LANG["Names_example_Name"] = "Alex (qualquer gênero)";
$LANG["Names_example_Name4"] = "Jenny, Toby, Ben, Peter";
$LANG["Names_example_Name_Initial_Surname"] = "Alex J. Smith";
$LANG["Names_example_Name_Surname"] = "Alex Smith";
$LANG["Names_example_Surname_Name_Initial"] = "Smith, John P.";
$LANG["Names_example_fullnames"] = "Alex Smith, ou Alex J. Smith";
$LANG["Names_example_surname"] = "Smith (apelido)";
$LANG["Names_help_intro"] = "Este tipo de dados gera aleatoriamente nomes de humanos (sobretudo ocidentais) de acordo com o formato que você especificar. Você pode especificar múltiplos formatos, separando-os com o pipe (|) caracteres. O seguinte texto será convertido em seu equivalente em nome aleatório:";
$LANG["Names_incomplete_fields"] = "O nome do tipo de dados deve ter o formato entrou no campo de texto Opções. Corrija as seguintes linhas:";
$LANG["Names_name"] = "Nome";
$LANG["Names_type_FemaleName"] = "Um nome feminino em primeiro lugar.";
$LANG["Names_type_Initial"] = "Uma letra maiúscula, AZ.";
$LANG["Names_type_MaleName"] = "Um nome masculino.";
$LANG["Names_type_Name"] = "Um nome em primeiro lugar, masculino ou feminino.";
$LANG["Names_type_Surname"] = "Um sobrenome aleatória.";
$LANG["NumberRange_and"] = "e";
$LANG["NumberRange_between"] = "Entre";
$LANG["NumberRange_help"] = "Isso gera aleatoriamente um número entre os valores que você especificar. Ambos os campos permitem que você digite números negativos.";
$LANG["NumberRange_name"] = "Número da Faixa";
$LANG["Phone_different_formats"] = "Diferentes formatos";
$LANG["Phone_example_1"] = "O Canadá (1)";
$LANG["Phone_example_2"] = "Canadá (2)";
$LANG["Phone_help_text1"] = "Qualquer texto que você digitar no campo de texto de opções será usado para gerar números de telefone. s Capital <b>X</b>&#39;será convertido para um número aleatório entre 1 e 9; s <b>minúsculas x </b>&#39; será convertido para um número aleatório entre 0 e 9.";
$LANG["Phone_help_text2"] = "Selecione um dos valores na lista suspensa exemplo para algumas idéias. Lembre-se: nada de diferente do <b>X</b>e <b>x</b>O personagem é deixado inconversos.";
$LANG["Phone_help_text3"] = "Tal como acontece com muitos dos outros tipos de dados, para gerar números de telefone em formato de vários separa-os com um caractere | pipe.";
$LANG["Phone_incomplete_fields"] = "O tipo de dados do telefone precisa ter o formato entrou no campo de texto Opções. Corrija as seguintes linhas:";
$LANG["Phone_name"] = "Fone / Fax";
$LANG["Phone_uk"] = "Reino Unido";
$LANG["PostalZip_help_text"] = "Gera um zip aleatória ou código postal. Para maior controle, use a opção do tipo alfa-numérico de dados.";
$LANG["PostalZip_name"] = "Postal Zip /";
$LANG["StateProvince_help_text"] = "Gera aleatoriamente províncias canadenses, estados ou municípios, com base nas opções que você selecionar. O <b>Nome Completo / b&gt; e <b>Abreviatura</b>sub-opções determinam se o resultado irá conter a string completa (por exemplo, &quot;British Columbia&quot;) ou a sua abreviatura (por exemplo, &quot;BC&quot;). Para condados do Reino Unido, a sigla é o padrão de código de 3 caracteres Chapman.";
$LANG["StateProvince_name"] = "Estado / Província Distrito";
$LANG["StreetAddress_ap_num"] = "Ap #";
$LANG["StreetAddress_name"] = "Morada";
$LANG["StreetAddress_po_box"] = "PO Box";
$LANG["StreetAddress_street_types"] = "Santo, Santo, Rua, Estrada, Rd., Rd., Ave Av,. Avenue";
$LANG["TextFixed_generate"] = "Gerar";
$LANG["TextFixed_help"] = "Esta opção gera um número fixo de palavras aleatórias, puxou da href=&quot;http://en.wikipedia.org/wiki/Lorem_ipsum&quot; &lt;a padrão &lt;lorem ipsum target=&quot;_blank&quot;&gt; / texto em latim a&gt;.";
$LANG["TextFixed_name"] = "Número fixo de palavras";
$LANG["TextFixed_words"] = "palavras";
$LANG["TextRandom_name"] = "Random Number of Words";
$LANG["Tree_auto_increment_row_num"] = "Auto-incremento número da linha:";
$LANG["Tree_help_1"] = "Este tipo de dados que permite gerar dados em formato de árvore em que cada linha é um filho de outra linha - com excepção da primeira linha, que é o tronco da árvore. Este tipo de dados deve ser utilizado em conjunto com o tipo de dados Auto-Increment: que garante que cada linha tem um valor numérico único, que usa esse tipo de dados de referência para as linhas pai.";
$LANG["Tree_help_2"] = "As opções permitem que você especifique quais campos de formulário é o campo auto-incremento adequado eo número máximo de crianças pode ter um nó.";
$LANG["Tree_invalid_parent"] = "Inválido [pai]";
$LANG["Tree_max_num_sibling_nodes"] = "O número máximo de irmão nós:";
$LANG["Tree_name"] = "Tree (pai linha ID)";
$LANG["about"] = "Sobre";
$LANG["accounts"] = "Contas";
$LANG["add"] = "Adicionar";
$LANG["add_default_auto_increment_col"] = "Adicionar padrão da coluna auto-incremento";
$LANG["column_title"] = "Coluna de Título";
$LANG["confirm_delete_form"] = "Tem certeza que quer apagar esta forma?";
$LANG["confirm_empty_form"] = "Tem certeza de que deseja esvaziar esta forma?";
$LANG["countries"] = "Países";
$LANG["country_australia"] = "Austrália";
$LANG["country_belgium"] = "Bélgica";
$LANG["country_canada"] = "Canadá";
$LANG["country_netherlands"] = "Holanda";
$LANG["country_uk"] = "Reino Unido";
$LANG["country_us"] = "Estados Unidos";
$LANG["data_type"] = "Tipo de dados";
$LANG["db_table_name"] = "Database Nome da tabela";
$LANG["db_type"] = "Database Type";
$LANG["default_save_form_empty_str"] = "Digite o nome do formulário aqui";
$LANG["del"] = "Del";
$LANG["del_uc"] = "DEL";
$LANG["delimiter_chars"] = "Delimitador de caracteres (s)";
$LANG["donate"] = "Doe!";
$LANG["empty_form"] = "Forma vazia";
$LANG["enclose_table_backquotes"] = "Coloque nomes de tabela e de campo com backquotes";
$LANG["eol_char"] = "Fim da linha de caracteres";
$LANG["examples"] = "Exemplos";
$LANG["fatal_error"] = "Ocorreu um erro fatal.";
$LANG["form_deleted"] = "O formulário foi eliminado.";
$LANG["form_exists_overwrite_confirmation"] = "Esta forma já existe. Deseja substituí-lo?";
$LANG["form_not_deleted"] = "Desculpe, não foi possível excluir este formulário. Re log-in e tente novamente.";
$LANG["form_saved"] = "Seu formulário foi salvo.";
$LANG["forums"] = "Fóruns";
$LANG["generate"] = "Gerar";
$LANG["generator"] = "Gerador";
$LANG["help"] = "Ajuda";
$LANG["hide_error"] = "Ocultar erro";
$LANG["human_data"] = "Homem de dados";
$LANG["include_create_table_query"] = "Inclua consulta CREATE TABLE";
$LANG["include_drop_table_query"] = "Inclua consulta DROP TABLE";
$LANG["invalid_custom_xml"] = "Há um problema com a marcação XML personalizado que você entrou. Por favor, consulte a documentação do usuário para obter mais informações.";
$LANG["invalid_node_names"] = "nomes de nó XML pode deve conter apenas caracteres alfanuméricos e deve começar com uma letra. Corrija as seguintes linhas:";
$LANG["invalid_num_results"] = "Por favor insira um número válido de resultados.";
$LANG["invalid_table_names"] = "nomes de coluna de banco de dados pode apenas caracteres alfanuméricos e deve começar com uma letra. Corrija as seguintes linhas:";
$LANG["invalid_xml_record_node_name"] = "Digite um valor válido XML nó registro.";
$LANG["invalid_xml_root_node_name"] = "Digite um valor válido XML nó raiz.";
$LANG["load_uc"] = "LOAD";
$LANG["misc_options"] = "Misc Options";
$LANG["missing_node_names"] = "As linhas que se seguem desaparecidas nomes de nó:";
$LANG["missing_table_names"] = "As linhas seguintes nomes de coluna em falta de tabela:";
$LANG["missing_xml_record_node_name"] = "Por favor insira um valor recorde para o nó XML.";
$LANG["missing_xml_root_node_name"] = "Por favor insira um valor para o nó raiz XML.";
$LANG["no_csv_delimiter"] = "Por favor, introduza o delimitador de CSV.";
$LANG["no_data"] = "Oops, nada de gerar! Digite alguns dados a ser gerado.";
$LANG["no_examples_available"] = "Nenhum exemplos disponíveis.";
$LANG["no_form_name"] = "Por favor, indique um nome de formulário.";
$LANG["no_js"] = "<b>erro:</b>JavaScript não está habilitado.";
$LANG["no_js_blurb"] = "Os dados script gerador depende muito javascript. Você precisa ativá-lo em seu navegador, em seguida, atualize a página.";
$LANG["no_num_rows"] = "Por favor, indique o número de linhas a acrescentar.";
$LANG["no_options_available"] = "Não há opções disponíveis.";
$LANG["node_name"] = "O nome do nó";
$LANG["none"] = "Nenhum";
$LANG["num_results"] = "Num resultados";
$LANG["ok"] = "OK";
$LANG["options"] = "Opções";
$LANG["order"] = "Ordem";
$LANG["other"] = "Outros";
$LANG["please_fix_errors"] = "Corrija os erros seguintes e envie novamente:";
$LANG["please_select"] = "Selecione";
$LANG["primary_key"] = "Chave Primária";
$LANG["record_node_name"] = "Record nome do nó";
$LANG["result_type"] = "Tipo de resultado";
$LANG["root_node_name"] = "Nome do nó raiz";
$LANG["row_sp"] = "Row (s)";
$LANG["save_uc"] = "SAVE";
$LANG["script_thinking"] = "Opa, espera um segundo. O script está pensando.";
$LANG["see_help_popup"] = "Consulte a ajuda do popup.";
$LANG["select_language"] = "Selecione o idioma";
$LANG["statement_type"] = "Declaração de Tipo";
$LANG["table_column"] = "Coluna da tabela";
$LANG["text"] = "Texto";
$LANG["use_custom_xml_format"] = "Use o formato XML personalizado";
$LANG["website"] = "Site";

?>