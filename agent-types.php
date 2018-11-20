<?php
/**
 * See https://github.com/Respect/Validation to know how to write validations
 */
return array(
    'metadata' => array(
        'nomeCompleto' => array(
            'private' => true,
            'label' => 'Nombre completo o Razón Social',
            'validations' => array(
                //'required' => 'Seu nome completo ou jurídico deve ser informado.'
            )
        ),

        'documento' => array(
            'private' => true,
            'label' => 'CUI',
//            'validations' => array(
//                'required' => 'Seu CPF ou CNPJ deve ser informado.',
//                'unique' => 'Este documento já está registrado em nosso sistema.',
//                'v::oneOf(v::cpf(), v::cnpj())' => 'O número de documento informado é inválido.',
//                'v::regex("#^(\d{2}(\.\d{3}){2}/\d{4}-\d{2})|(\d{3}\.\d{3}\.\d{3}-\d{2})$#")' => 'Utilize o formato xxx.xxx.xxx-xx para CPF e xx.xxx.xxx/xxxx-xx para CNPJ.'
//            )
        ),

        'raca' => array(
            'private' => true,
            'label' => 'Raça/cor',
            'type' => 'select',
            'options' => array(
                '' => 'No informar',
		'Maya Achi' => 'Maya Achi',
		'Maya Awakateko' => 'Maya Awakateko',
		'Maya Ch’orti‘' => 'Maya Ch´orti',
		'Maya Chuj' => 'Maya Chuj',
		'Maya Itza‘' => 'Maya Itza‘',
		'Maya Ixil' => 'Maya Ixil',
		'Maya Jakalteco/Popti‘' => 'Maya Jakalteco/Popti',
		'Maya K’iche‘' => 'Maya K’iche‘',
		'Maya Kaqchikel' => 'Maya Kaqchikel',
		'Maya Mam' => 'Maya Mam',
		'Maya Mopan' => 'Maya Mopan',
		'Maya Poqomam' => 'Maya Poqomam',
		'Maya Poqomchi‘' => 'Maya Poqomchi‘',
		'Maya Q’anjob’al' => 'Maya Q’anjob’al',
		'Maya Q’eqchi‘' => 'Maya Q’eqchi‘',
		'Maya Sakapulteko' => 'Maya Sakapulteko',
		'Maya Sipakapense' => 'Maya Sipakapense',
		'Maya Tektiteko' => 'Maya Tektiteko',
		'Maya Tz’utujil' => 'Maya Tz’utujil',
		'Maya Uspanteko' => 'Maya Uspanteko',
                'Xinka' => 'Xinka',
                'Garífuna' => 'Garífuna',
                'Mestizo' => 'Mestizo'
            )
        ),



        'dataDeNascimento' => array(
            'private' => true,
            'label' => 'Fecha de nacimiento/creación',
            'type' => 'date',
            'validations' => array(
                'v::date("Y-m-d")' => 'Fecha no válida {{format}}',
            )
        ),

        'localizacao' => array(
            'label' => 'Localización',
            'type' => 'select',
            'options' => array(
                '' => 'No informar',
                'Pública' => 'Pública',
                'Privada' => 'Privada'
            )
        ),

        'genero' => array(
            'private' => true,
            'label' => 'Género',
            'type' => 'select',
            'options' => array(
                '' => 'No informar',
                'Femenino' => 'Femenino',
                'Masculino' => 'Masculino',
                'Otro' => 'Otro'
            )
        ),

        'emailPublico' => array(
            'label' => 'Email Público',
            'validations' => array(
                'v::email()' => 'El email público no es un email válido.'
            )
        ),

        'emailPrivado' => array(
            'private' => true,
            'label' => 'Email Privado',
            'validations' => array(
                //'required' => 'O email privado es obligatorio.',
                'v::email()' => 'El email privado no es un email válido.'
            )
        ),

        'telefonePublico' => array(
            'label' => 'Teléfono Público',
            'type' => 'string',
            //'validations' => array(
            //    'v::allOf(v::regex("#^\(\d{2}\)[ ]?\d{4,5}-\d{4}$#"), v::brPhone())' => 'Por favor, informe el Teléfono Público en el formato (xx) xxxx-xxxx.'
            //)
        ),

        'telefone1' => array(
            'private' => true,
            'label' => 'Teléfono 1',
            'type' => 'string',
          //  'validations' => array(
          //      'v::allOf(v::regex("#^\(\d{2}\)[ ]?\d{4,5}-\d{4}$#"), v::brPhone())' => 'Por favor, informe el teléfono 1 en el formato (xx) xxxx-xxxx.'
          //  )
        ),


        'telefone2' => array(
            'private' => true,
            'label' => 'Teléfono 2',
            'type' => 'string',
          //  'validations' => array(
          //      'v::allOf(v::regex("#^\(\d{2}\)[ ]?\d{4,5}-\d{4}$#"), v::brPhone())' => 'Por favor, informe el teléfono 2 en el formato (xx) xxxx-xxxx.'
         //   )
        ),

        'endereco' => array(
            'private' => function(){
                return !$this->publicLocation;
            },
            'label' => 'Dirección',
            'type' => 'text'
        ),
                    
        'En_CEP' => [
            'label' => 'CP',
            'private' => function(){
                return !$this->publicLocation;
            },
        ],
        'En_Nome_Logradouro' => [
            'label' => 'Dirección',
            'private' => function(){
                return !$this->publicLocation;
            },
        ],
        'En_Num' => [
            'label' => 'Número',
            'private' => function(){
                return !$this->publicLocation;
            },
        ],
        'En_Complemento' => [
            'label' => 'Complemento',
            'private' => function(){
                return !$this->publicLocation;
            },
        ],
        'En_Bairro' => [
            'label' => 'Barrio/Zona',
            'private' => function(){
                return !$this->publicLocation;
            },
        ],
        'En_Municipio' => [
            'label' => 'Municipio',
            'private' => function(){
                return !$this->publicLocation;
            },
        ],
        'En_Estado' => [
            'label' => 'Departamento',
            'private' => function(){
                return !$this->publicLocation;
            },
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

       'facebook' => array(
            'label' => 'Facebook',
        //    'validations' => array(
         //       "v::url('facebook.com')" => "La url informada no es válida. Deber comenzar con http://"
        //    )
        ),
        'twitter' => array(
            'label' => 'Twitter',
         //   'validations' => array(
         //       "v::url('twitter.com')" => "La url informada no es válida. Deber comenzar con http://"
        //    )
        ),
        'googleplus' => array(
            'label' => 'Google+',
          //  'validations' => array(
          //      "v::url('plus.google.com')" => "La url informada no es válida. Deber comenzar con http://"
         //   )
        ),
        'instagram' => array(
            'label' => \MapasCulturais\i::__('Instagram'),
            'validations' => array(
                "v::startsWith('@')" => \MapasCulturais\i::__("O usuário informado é inválido. Informe no formato @usuario e tente novamente")
            )
        ),

    ),
    'items' => array(
        1 => array( 'name' => 'Asociación' ),
        2 => array( 'name' => 'Colectivo' ),
        3 => array( 'name' => 'Grupo' ),
        4 => array( 'name' => 'Individual' ),
    )
);
