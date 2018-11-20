<?php
/**
 * See https://github.com/Respect/Validation to know how to write validations
 */
return array(
    'metadata' => array(
        'emailPublico' => array(
            'label' => 'Email Público',
            'validations' => array(
                'v::email()' => 'El email público no es un email válido.'
            )
        ),

        'emailPrivado' => array(
            'label' => 'Email Privado',
            'validations' => array(
                'v::email()' => 'El email privado no es un email válido.'
            ),
            'private' => true
        ),

        'telefonePublico' => array(
            'label' => 'Teléfono Público',
            'type' => 'string',
            //'validations' => array(
            //    'v::allOf(v::regex("#^\(\d{2}\)[ ]?\d{4,5}-\d{4}$#"), v::brPhone())' => 'Por favor, informe el Teléfono Público en el formato (xx) xxxx-xxxx.'
            //)
        ),

        'telefone1' => array(
            'label' => 'Teléfono 1',
            'type' => 'string',
            'private' => true,
            //'validations' => array(
            //    'v::allOf(v::regex("#^\(\d{2}\)[ ]?\d{4,5}-\d{4}$#"), v::brPhone())' => 'Por favor, informe el teléfono 1 en el formato (xx) xxxx-xxxx.'
            //)
        ),


        'telefone2' => array(
            'label' => 'Teléfono 2',
            'type' => 'string',
            'private' => true
            //'validations' => array(
            //    'v::allOf(v::regex("#^\(\d{2}\)[ ]?\d{4,5}-\d{4}$#"), v::brPhone())' => 'Por favor, informe el teléfono 2 en el formato (xx) xxxx-xxxx.'
            //)
        ),

        /*
        'virtual_fisico' => array(
            'label' => 'Virtual ou físico',
            'type' => 'select',
            'options' => array(
                '' => 'Físico',
                'virtual' => 'Virtual'
            )
        ),
        */
        'acessibilidade' => array(
            'label' => 'Accesibilidad',
            'type' => 'select',
            'options' => array(
                '' => 'No Informado',
                'Sí' => 'Sí',
                'No' => 'No'
            )
        ),
        'acessibilidade_fisica' => array(
            'label' => 'Accesibilidad física',
            'type' => 'multiselect',
            'allowOther' => true,
            'allowOtherText' => 'Otros',
            'options' => array(
                //'Baños adaptados',
                //'Rampa de acceso',
                'Elevador',
                //'Señalización táctil',
                
                // vindos do sistema de museus.cultura.gov.br
                
                'Bebedero adaptado',
                //'Silla de ruedas para uso del visitante',
                //'Circuito de visita adaptado',
                
                'Barandilla en las escaleras y rampas',
                'Elevador adaptado',
                'Rampa de acceso',
                'Sanitario adaptado',
                //'Teléfono Público adaptado',
                'Estacionamento exclusivo',
                //'Estacionamento exclusivo para discapacitados',
                //'Estacionamento exclusivo para tercera edad'
            )
        ),
        'capacidade' => array(
            'label' => 'Capacidad',
            'validations' => array(
                "v::intVal()->positive()" => "La capacidad debe ser un número positivo."
            )
        ),

        'endereco' => array(
            'label' => 'Dirección',
            'type' => 'text'
        ),
        

        'En_CEP' => [
            'label' => 'CP',
        ],
        'En_Nome_Logradouro' => [
            'label' => 'Dirección',
        ],
        'En_Num' => [
            'label' => 'Número',
        ],
        'En_Complemento' => [
            'label' => 'Complemento',
        ],
        'En_Bairro' => [
            'label' => 'Barrio/Zona',
        ],
        'En_Municipio' => [
            'label' => 'Municipio',
        ],
        'En_Estado' => [
            'label' => 'Departamento',
            'type' => 'select',
            'options' => array(
		'Alta Verapaz' => 'Alta Verapaz',
                'Baja Verapaz' => 'Baja Verapaz',
		'Chimaltenango' => 'Chimaltenango',
		'Chiquimula' => 'Chiquimula',
		'Petén' => 'Petén',
		'El Progreso' => 'El Progreso',
		'Quiché' => 'Quiché',
		'Escuintla' => 'Escuintla',
		'Guatemala' => 'Guatemala',
		'Huehuetenango' => 'Huehuetenango',
		'Izabal' => 'Izabal',
		'Jalapa' => 'Jalapa',
		'Jutiapa' => 'Jutiapa',
		'Quetzaltenango' => 'Quetzaltenango',
		'Retalhuleu' => 'Retalhuleu',
		'Sacatepéquez' => 'Sacatepéquez',
		'San Marcos' => 'San Marcos',
		'Santa Rosa' => 'Santa Rosa',
		'Sololá' => 'Sololá',
		'Suchitepéquez' => 'Suchitepéquez',
		'Totonicapán' => 'Totonicapán',
		'Zacapa' => 'Zacapa'
            )
        ],

        'horario' => array(
            'label' => 'Horario de funcionamiento',
            'type' => 'text'
        ),

        'criterios' => array(
            'label' => 'Criterios de uso del espacio',
            'type' => 'text'
        ),

        'site' => array(
            'label' => 'Sitio',
            //'validations' => array(
            //    "v::url()" => "La url informada no es válida. Deber comenzar con http://"
           // )
        ),
        'facebook' => array(
            'label' => 'Facebook',
           // 'validations' => array(
           //     "v::url('facebook.com')" => "La url informada no es válida. Deber comenzar con http://"
           // )
        ),
        'twitter' => array(
            'label' => 'Twitter',
           // 'validations' => array(
           //     "v::url('twitter.com')" => "La url informada no es válida. Deber comenzar con http://"
          //  )
        ),
        'googleplus' => array(
            'label' => 'Google+',
           // 'validations' => array(
            //    "v::url('plus.google.com')" => "La url informada no es válida. Deber comenzar con http://"
           // )
        ),
        'instagram' => array(
            'label' => \MapasCulturais\i::__('Instagram'),
            'validations' => array(
                "v::startsWith('@')" => \MapasCulturais\i::__("O usuário informado é inválido. Informe no formato @usuario e tente novamente")
            )
        ),
    ),

/**
 * Equipamentos Culturais
 */

    'items' => array(
        'Espacios de Exhibición de películas' => array(
            'range' => array(10,19),
            'items' => array(
                10 => array( 'name' => 'Cine' ),
				
        	)
        ),

        'Bibliotecas' => array(
            'range' => array(20,29),
            'items' => array(
                20 => array( 'name' => 'Biblioteca Pública' ),
				21 => array( 'name' => 'Biblioteca Privada' )
			)
        ),

        'Teatros' => array(
            'range' => array(30,39),
            'items' => array(
                30 => array('name' => 'Teatro'),
				31 => array('name' => 'Teatro Convencial'),
				32 => array('name' => 'Teatro al Aire Libre'),
				33 => array('name' => 'Teatro Auditorium'),
				34 => array('name' => 'Espacio Alternativo')
			)
        ),

        'Circos' => array(
            'range' => array(90,99),
            'items' => array(
                90 => array( 'name' => 'Circo' )
            )
        ),

       'Centros Culturales' => array(
            'range' => array(40,49),
            'items' => array(
                40 => array( 'name' => 'Centro Cultural' ),
				41 => array( 'name' => 'Casa de la Cultura' ),
				
            )
        ),

       'Archivos' => array(
            'range' => array(50,59),
            'items' => array(
                50 => array( 'name' => 'Archivo Público' ),
                51 => array( 'name' => 'Archivo Privado' ),
            )
        ),

       'Museos' => array(
            'range' => array(60,69),
            'items' => array(
                60 => array( 'name' => 'Museo' ),
				61 => array( 'name' => 'Museo Contemplativo' ),
				62 => array( 'name' => 'Museo Didáctico' ),
				63 => array( 'name' => 'Museo Informativo' )
            )
        ),

        'Otros Espacios Culturales' => array(
            'range' => array(100,199),
            'items' => array(
            		100 => array( 'name' => 'Galería' ),
            		101 => array( 'name' => 'Librería' ),
            		102 => array( 'name' => 'Espacio Recreativo' ),
            		103 => array( 'name' => 'Espacio Deportivo' ),
            		104 => array( 'name' => 'Bar' ),
            		105 => array( 'name' => 'Canal de TV' ),
			106 => array( 'name' => 'Centro de formación' ),
            		107 => array( 'name' => 'Disqueras' ),
            		108 => array( 'name' => 'Auditorio' ),
            		109 => array( 'name' => 'Editorial' ),
            		110 => array( 'name' => 'Salon Comunal o Municipal' ),
            		111 => array( 'name' => 'Espacio de exposición o exhibición' ),
            		112 => array( 'name' => 'Espacio no convencional' ),
            		113 => array( 'name' => 'Área Verde' ),
            		114 => array( 'name' => 'Medios de comunicación digital' ),
            		115 => array( 'name' => 'Pasajes' ),
            		116 => array( 'name' => 'Otros escenarios ' ),
            		117 => array( 'name' => 'Prensa escrita' ),
            		118 => array( 'name' => 'Radio' ),
            		119 => array( 'name' => 'Radio comunitaria' ),
            		120 => array( 'name' => 'Sala o Salon' ),
            		121 => array( 'name' => 'Sellos discográfico' ),
            		122 => array( 'name' => 'Cinemateca' ),
                	123 => array( 'name' => 'Organización Cultural'),
                	124 => array( 'name' => 'Videoteca'),
                	125 => array( 'name' => 'Espacio público'),
                	126 => array( 'name' => 'Fototeca'),
                	127 => array( 'name' => 'Mercado'),
			128 => array( 'name' => 'Cableoperadora'),
			129 => array( 'name' => 'Concha de Sonido'),
			130 => array( 'name' => 'Parque y plaza'),
			131 => array( 'name' => 'Centro ecológico'),
			132 => array( 'name' => 'Taller artesanal'),
			133 => array( 'name' => 'Inmueble')
            )
        ),

       'Centros de Documentación' => array(
            'range' => array(70,79),
            'items' => array(
                70 => array( 'name' => 'Centro de Documentación Público' ),
                71 => array( 'name' => 'Centro de Documentación Privado' )
            )
        ),
		

       /*'Espacios Religiosos' => array(
            'range' => array(80,89),
            'items' => array(
                80 => array( 'name' => 'Templo' ),
                81 => array( 'name' => 'Terreiro' ),
                82 => array( 'name' => 'Mesquitas' ),
                83 => array( 'name' => 'Sinagoga' ),
                84 => array( 'name' => 'Iglesia' ),
                85 => array( 'name' => 'Centro Espiritual' ),
              )
        ),*/

/**
 * Espaços de Formação Cultural
 */

      /* 'Instituciones Públicas de Enseñanza Formal' => array(
            'range' => array(300,399),
            'items' => array(
                300 => array( 'name' => 'Institución Pública de Enseñanza Formal Estatal' ),
                301 => array( 'name' => 'Institución Pública de Enseñanza Regular Estadual' ),
                302 => array( 'name' => 'Institución Pública de Enseñanza Regular Municipal' ),
                303 => array( 'name' => 'Institución Pública de Enseñanza Regular Distrital' ),
              )
        ),

       ' Instituições Privadas de Ensino Regular' => array(
            'range' => array(400,499),
            'items' => array(
                400 => array( 'name' => 'Instituição Privada Particular' ),
                401 => array( 'name' => 'Instituição Privada Comunitária' ),
                402 => array( 'name' => 'Instituição Privada Confessional' ),
                403 => array( 'name' => 'Instituição Privada Filantrópica' ),
              )
        ),*/

     /*  'Instituições Públicas exclusivamente voltada para formação artistica e cultural' => array(
            'range' => array(601,699),
            'items' => array(
                601 => array( 'name' => 'Instituição Pública Federal exclusivamente voltada para formação artistica e cultural' ),
                602 => array( 'name' => 'Instituição Pública Estadual exclusivamente voltada para formação artistica e cultural' ),
                603 => array( 'name' => 'Instituição Pública Municipal exclusivamente voltada para formação artistica e cultural' ),
                604 => array( 'name' => 'Instituição Pública Distrital exclusivamente voltada para formação artistica e cultural' ),
              )
        ),

       'Instituições Privadas exclusivamente voltada para formação artistica e cultural' => array(
            'range' => array(700,799),
            'items' => array(
                700 => array( 'name' => 'Instituição Privada Particular exclusivamente voltada para formação artistica e cultural' ),
                701 => array( 'name' => 'Instituição Privada Comunitária exclusivamente voltada para formação artistica e cultural' ),
                702 => array( 'name' => 'Instituição Privada Confessional exclusivamente voltada para formação artistica e cultural' ),
                703 => array( 'name' => 'Instituição Privada Filantrópica exclusivamente voltada para formação artistica e cultural' ),
              )
        ),*/

     /*  'Escolas livres' => array(
            'range' => array(800,899),
            'items' => array(
                800 => array( 'name' => 'Escola livre de Artes Cênicas' ),
                801 => array( 'name' => 'Escola livre de Artes Visuais' ),
                802 => array( 'name' => 'Escola livre de Audiovisual' ),
                803 => array( 'name' => 'Escola livre de Hip Hop' ),
                804 => array( 'name' => 'Escola livre de Cultura Digital' ),
                805 => array( 'name' => 'Escola livre de Música' ),
                806 => array( 'name' => 'Escola livre de Cultura Popular' ),
                807 => array( 'name' => 'Escola livre de Gestão Cultural' ),
                808 => array( 'name' => 'Escola livre de Pontinhos de cultura' ),
                809 => array( 'name' => 'Escola livre de Patrimônio' ),
                810 => array( 'name' => 'Escola livre de Design' ),
              )
        ),*/

/**
 * Patrimônios Culturais
 */

        'Bienes culturales de naturaleza material' => array(
            'range' => array(200, 299),
            'items' => array(
                200 => array( 'name' => 'Sitio Arqueológico' ),
                201 => array( 'name' => 'Lugar Sagrado' ),
                202 => array( 'name' => 'Monumento' ),
				203 => array( 'name' => 'Obra arquitectonica' )
            )
        ),

      /*  'Temporário' => array(
            'range' => array(500,600),
            'items' => array(
                501 => array( 'name' => 'Palco de Rua' ),
            )
        ),*/
    )
    /* EXEMPLOS DE METADADOS:

    'cnpj' => array(
        'label' => 'CNPJ',
        'type' => 'text',
        'validations' => array(
            'unique' => 'Este CNPJ já está cadastrado em nosso sistema.',
            'v::cnpj()' => 'O CNPJ é inválido.'
        )
    ),
    'cpf' => array(
        'label' => 'CPF',
        'type' => 'text',
        'validations' => array(
            'required' => 'Por favor, informe o CPF.',
            'v::cpf()' => 'O CPF é inválido.'
        )
    ),
    'radio' => array(
        'label' => 'Um exemplo de input radio',
        'type' => 'radio',
        'options' => array(
            'valor1' => 'Label do valor 1',
            'valor2' => 'Label do valor 2',
        ),
        'default_value' => 'valor1'
    ),
    'checkboxes' => array(
        'label' => 'Um exemplo de grupo de checkboxes',
        'type' => 'checkboxes',
        'options' => array(
            'valor1' => 'Label do Primeiro checkbox',
            'valor2' => 'Label do Primeiro checkbox'
        ),
        'default_value' => array(),
        'validations' => array(
            'v::arrayType()->notEmpty()' => 'Você deve marcar ao menos uma opção.'
        )
    ),
    'checkbox' => array(
        'label' => 'Um exemplo de campo booleano com checkbox.',
        'type' => 'checkbox',
        'input_value' => 1,
        'default_value' => 0
    ),
    'email' => array(
        'label' => 'Email público para contato',
        'type' => 'text',
        'validations'=> array(
            'v::email()' => 'O email informado é inválido.'
        )
    ),
    'site' => array(
        'label' => 'Site',
        'type' => 'text',
        'validations'=> array(
            'v::url()' => 'La url informada no es válida.'
        )
    ),
    'estado' => array(
        'label' => 'Estado de Residência',
        'type' => 'select',
        'options' => array(
            ''   => '',
            'AC' => 'Acre',
            'AL' => 'Alagoas',
            'AM' => 'Amazonas',
            'AP' => 'Amapá',
            'BA' => 'Bahia',
            'CE' => 'Ceará',
            'DF' => 'Distrito Federal',
            'ES' => 'Espírito Santo',
            'GO' => 'Goiás',
            'MA' => 'Maranhão',
            'MG' => 'Minas Gerais',
            'MS' => 'Mato Grosso do Sul',
            'MT' => 'Mato Grosso',
            'PA' => 'Pará',
            'PB' => 'Paraíba',
            'PE' => 'Pernambuco',
            'PI' => 'Piauí',
            'PR' => 'Paraná',
            'RJ' => 'Rio de Janeiro',
            'RN' => 'Rio Grande do Norte',
            'RO' => 'Rondônia',
            'RR' => 'Roraima',
            'RS' => 'Rio Grande do Sul',
            'SC' => 'Santa Catarina',
            'SE' => 'Sergipe',
            'SP' => 'São Paulo',
            'TO' => 'Tocantins',
            ''   => '',
            'OUT'   => 'Resido Fora do Brasil'
        ),

        'validations' => array(
            "v::stringType()->in('AC','AL','AM','AP','BA','CE','DF','ES','GO','MA','MG','MS','MT','PA','PB','PE','PI','PR','RJ','RN','RO','RR','RS','SC','SE','SP','TO','OUT')" => 'O estado informado não existe.'
        )
    )
     */
);
