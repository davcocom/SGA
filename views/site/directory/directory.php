<?php
/**
 * Created by PhpStorm.
 * User: David Cocom
 * Date: 03/02/2016
 * Time: 04:23 PM
 */
use yii\helpers\Html;
use kartik\tabs\TabsX;

?>
<?php
$sgaDirectives = [
    'person1' => [
        'name' => 'Dr. José de Jesús Williams',
        'role' => 'Rector de la Universidad Autónoma de Yucatán',
        'email' => 'jwill@uady.mx'
    ],
    'person2' => [
        'name' => 'MDO. Juan de Dios Pérez Alayon',
        'role' => 'Director General de Planeación y Efectividad Institucional',
        'email' => 'palayon@uady.mx'
    ],
    'person3' => [
        'name' => 'MAO. Adriana Ancona Calero',
        'role' => 'Responsable del Programa de Gestión Ambiental
            Dirección General de Planeación y Efectividad Institucional',
        'email' => 'adriana.ancona@correo.uady.mx'
    ],
];
$sgaTeam = [
    'person1' => [
        'name' => 'Q.I. Anahí Fernanda Cardona Gutiérrez',
        'role' => 'Responsable de Auditoría Ambiental
Área de Gestión Ambiental
Dirección General de Planeación y Efectividad Institucional',
        'email' => 'fernanda.cardona@correo.uady.mx'
    ],
    'person2' => [
        'name' => 'Lic. Mariana Karen Guillermo Palmero',
        'role' => 'Responsable de Control de Documentos / Seguimiento de Capacitación Ambiental
Área de Gestión Ambiental
Dirección General de Planeación y Efectividad Institucional',
        'email' => 'mariana.guillermo@correo.uady.mx'
    ],
    'person3' => [
        'name' => 'Br. Neftalí Eduardo Martínez Estañol',
        'role' => 'Responsable de Monitoreo y Medición
Área de Gestión Ambiental
Dirección General de Planeación y Efectividad Institucional',
        'email' => 'eduardo.martinez@correo.uady.mx'
    ],
    'person5' => [
        'name' => 'Br. Jhonatan Misael González Martínez',
        'role' => 'Responsable de Seguimiento y Cumplimiento Legal
Área de Gestión Ambiental
Dirección General de Planeación y Efectividad Institucional',
        'email' => 'Jhonatan.gonzalez@correo.uady.mx'
    ]
];
$highDirectives = [
    'person1' => [
        'name' => 'Dr. José de Jesús Williams',
        'role' => 'Rector de la Universidad Autónoma de Yucatán',
        'email' => 'jwill@uady.mx'
    ],
    'person2' => [
        'name' => 'MDO. Juan de Dios Pérez Alayon',
        'role' => 'Director General de Planeación y Efectividad Institucional',
        'email' => 'palayon@uady.mx'
    ],
];
$campusSocial = [
    [
        'name' => 'Dra. Celia E. Rosado Avilés',
        'role' => 'Directora de la Facultad de Ciencias Antropológicas',
        'email' => 'celroavi@uady.mx'
    ], [
        'name' => 'C.P. Aureliano Martínez Castillo, M.F.',
        'role' => 'Director de la Facultad de Contaduría y Administración',
        'email' => 'aureliano.martinez@uady.mx'
    ], [
        'name' => 'Dr. Carlos Alberto Macedonio Hernández',
        'role' => 'Director de la Facultad de Derecho',
        'email' => 'carlos.macedonio@correo.uady.mx'
    ],
    [
        'name' => 'Dr. Alberto Quintal Palomo',
        'role' => '	Director de la Facultad de Economía',
        'email' => 'qpalomo@correo.uady.mx'
    ], [
        'name' => 'Lic. en Psic. Adda Ruth Mendoza Alcocer, MDO.',
        'role' => 'Directora de la Facultad de Psicología',
        'email' => 'malcocer@correo.uady.mx'
    ], [
        'name' => 'Mtra. Gladys Julieta Guerrero Walker',
        'role' => 'Directora de la Facultad de Educación',
        'email' => 'gwalker@uady.mx'
    ], [
        'name' => 'Abog. Jorge Enrique Rivero Aguilar',
        'role' => 'Representante de Alta Dirección de la Facultad de Derecho',
        'email' => 'jorge.rivero@correo.uady.mx'
    ],
    [
        'name' => 'M. en C. Lizbeth Noemí Fernández Chalé',
        'role' => 'Representante de Alta Dirección de la Facultad de Economía',
        'email' => 'lizbeth.fernandez@correo.uady.mx'
    ], [
        'name' => 'Lic. en Psic. Jorge Ramón Navarrete Centeno',
        'role' => 'Representante de Alta Dirección de la Facultad de Psicología',
        'email' => 'ncenteno@correo.uady.mx'
    ], [
        'name' => 'Dra. Nora Verónica Druet Domínguez',
        'role' => 'Representante de Alta Dirección de la Facultad de Educación',
        'email' => 'ddoming@uady.mx'
    ], [
        'name' => 'Dra. Roxana Quiroz Carranza',
        'role' => 'Representante de Alta Dirección de la Facultad de Ciencias Antropológicas',
        'email' => 'rquiroz@uady.mx'
    ], [
        'name' => 'C.P. David Roberto Suárez Pacheco',
        'role' => 'Representante de Alta Dirección de la Facultad de Contaduría y Administración',
        'email' => 'david.suarez@correo.uady.mx'
    ],
];
$campusExacts = [
    [
        'name' => 'Dr. Ramón Peniche Mena',
        'role' => 'Director de la Facultad de Matemáticas',
        'email' => 'pmena@uady.mx'
    ],
    [
        'name' => 'Dra. Marcela Zamudio Maya',
        'role' => 'Directora de la Facultad de Ingeniería Química',
        'email' => 'marcela.zamudio@correo.uady.mx'
    ],
    [
        'name' => 'Dr. Luis Enrique Fernández Baqueiro',
        'role' => 'Director de la Facultad de Ingeniería',
        'email' => 'luis.fernandez@correo.uady.mx'
    ],
    [
        'name' => 'M. en C. Carlos Benito Mojica Ruiz',
        'role' => 'Representante de Alta Dirección de la Facultad de Matemáticas',
        'email' => 'mruiz@uady.mx'
    ],
    [
        'name' => 'M. en C. Francisco Javier Herrera Rodríguez',
        'role' => 'Representante de Alta Dirección de la Facultad de Ingeniería Química',
        'email' => 'francisco.herrera@correo.uady.mx'
    ],
    [
        'name' => 'Dr. Mauricio Gamboa Marrufo',
        'role' => 'Representante de Alta Dirección de la Facultad de Ingeniería',
        'email' => 'gmarrufo@uady.mx'
    ]
];
$campusBiology = [
    [
        'name' => 'M. en C. Marco Antonio Torres León',
        'role' => 'Director de la Facultad de Medicina Veterinaria y Zootecnia',
        'email' => 'marco.torres@uady.mx'
    ], [
        'name' => 'M.C. José Enrique Abreu Sierra',
        'role' => 'Representante de Alta Dirección de la Facultad de Medicina Veterinaria y Zootecnia',
        'email' => 'jasierra@uady.mx'
    ],
];
$campusHealth = [
    [
        'name' => 'M.C.E. Silvia Carola Salas Ortegón',
        'role' => 'Directora de la Facultad de Enfermería',
        'email' => 'silvia.salas@correo.uady.mx'
    ], [
        'name' => 'M.C. Guillermo Storey Montalvo',
        'role' => 'Director de la Facultad de Medicina',
        'email' => 'smontal@correo.uady.mx'
    ], [
        'name' => 'M. en O. Fernando Javier Aguilar Ayala',
        'role' => 'Director de la Facultad de Odontología',
        'email' => 'faguilar@correo.uady.mx'
    ], [
        'name' => 'Dra. Zulema Osiris Cantillo Ciau',
        'role' => 'Directora de la Facultad de Química',
        'email' => 'zulema.cantillo@uady.mx'
    ], [
        'name' => 'M.C. José W. Bolio García',
        'role' => 'Representante de Alta Dirección de la Facultad de Enfermería',
        'email' => 'jose.bolio@correo.uady.mx'
    ], [
        'name' => 'M.C. William Alberto Vargas Cano',
        'role' => 'Representante de Alta Dirección de la Facultad de Medicina',
        'email' => 'vcano@correo.uady.mx'
    ], [
        'name' => 'M. en O. Mauricio Escoffié Ramírez',
        'role' => 'Representante de Alta Dirección de la Facultad de Odontología',
        'email' => 'mauricio.escoffie@correo.uady.mx'
    ], [
        'name' => 'M. en C. Amílcar Aguilar González',
        'role' => 'Representante de Alta Dirección de la Facultad de Química',
        'email' => 'aaguilar@uady.mx'
    ],
];
$environmentalAuditors = [
    [
        'name' => 'DR. Víctor Manuel Cobos Gasca',
        'role' => 'Auditor Líder',
        'email' => 'cgasca@uady.mx'
    ], [
        'name' => 'CD. Johnny Jesús Granados Balam',
        'role' => 'Auditor Líder',
        'email' => 'j.granados@uady.mx'
    ], [
        'name' => 'Psic. Martín Enrique Sánchez Uc',
        'role' => 'Auditor Líder',
        'email' => 'martin.sanchez@uady.mx'
    ], [
        'name' => 'M.A.O. Adriana Ancona Calero',
        'role' => 'Auditor Líder',
        'email' => 'adriana.ancona@correo.uady.mx'
    ], [
        'name' => 'Q.I. Anahí Fernanda Cardona Gutiérrez',
        'role' => 'Auditor Líder',
        'email' => 'fernanda.cardona@correo.uady.mx'
    ], [
        'name' => 'Mtra. María Teresa Gullotti Vázquez',
        'role' => 'Auditor en Entrenamiento',
        'email' => 'tere.gullotti@uady.mx'
    ],
];
$implementationTeamSocial = [
    [
        'name' => 'Dr. Rafael Ortiz Pech',
        'role' => 'Responsable Ambiental <br> Facultad de Economía',
        'email' => 'rafael.ortiz@uady.mx'
    ],
    [
        'name' => ' Mario Zapata Barbeito',
        'role' => 'Responsable Ambiental <br> Facultad de Psicología',
        'email' => 'mariozapatabarbeitor@gmail.com'
    ],
    [
        'name' => 'Mtro. Geovany Rodríguez Solís',
        'role' => 'Responsable Ambiental <br> Facultad de Educación ',
        'email' => 'rsolis@uady.mx'
    ],
    [
        'name' => 'Abog. Xicotencatl Cámara Acevedo',
        'role' => 'Responsable Ambiental <br> Facultad de Derecho',
        'email' => 'asesorias_xicotencatlcamara@hotmail.com'
    ],
    [
        'name' => 'Dr. Roger Domínguez Saldívar',
        'role' => 'Responsable Ambiental <br> Facultad de Ciencias Antropológicas',
        'email' => 'dsaldiv@uady.mx'
    ], [
        'name' => 'C.P. Diego A. Monsreal López',
        'role' => 'Responsable Ambiental <br> Facultad de Contaduría y Administración',
        'email' => 'diego.monsreal@uady.mx'
    ],
];
$implementationTeamExacts = [
    [
        'name' => 'I.Q.I. Mariana Martín López',
        'role' => 'Responsable Ambiental <br> Facultad de Ingeniería Química',
        'email' => 'mariana.martin@uady.mx'
    ],
    [
        'name' => 'Dr. Roger Méndez Novelo ',
        'role' => 'Responsable Ambiental <br> Facultad de Ingeniería',
        'email' => 'mnovelo@uady.mx'
    ],
    [
        'name' => 'Dr. German Giácoman ',
        'role' => 'Responsable Ambiental <br> Facultad de Ingeniería',
        'email' => 'giacoman@uady.mx'
    ]
];
$implementationTeamBiology = [
    [
        'name' => 'Dr. Víctor Cobos Gasca',
        'role' => 'Responsable Ambiental <br> Facultad de Medicina Veterinaria y Zootecnia',
        'email' => 'cgasca@uady.mx'
    ],
    [
        'name' => 'Q.F.B. Ana Rejón Magaña',
        'role' => 'Responsable Ambiental <br> Facultad de Medicina Veterinaria y Zootecnia',
        'email' => 'ana.rejon@uady.mx'
    ],
    [
        'name' => 'Q.F.B. María Barrios García',
        'role' => 'Responsable Ambiental <br> Facultad de Medicina Veterinaria y Zootecnia',
        'email' => 'maria.barrios@uady.mx'
    ]
];
$implementationTeamHealth = [
    [
        'name' => 'L.E. Lizbeth Paulina Padrón Aké',
        'role' => 'Responsable Ambiental <br> de Enfermería',
        'email' => 'lizbeth.padron@uady.mx'
    ], [
        'name' => 'Lic. en Der. Pamela Pereyra Azcorra ',
        'role' => 'Responsable Ambiental <br> Facultad de Medicina',
        'email' => 'pamela.pereyra@correo.uady.mx'
    ], [
        'name' => 'MES. Manuel Antonio Castro Piña',
        'role' => 'Responsable Ambiental <br> Facultad de Odontología',
        'email' => 'cpina@uady.mx'
    ], [
        'name' => 'M. en C. Daniel Humberto Rosas Sánchez',
        'role' => 'Responsable Ambiental <br> Facultad de Química',
        'email' => 'daniel.rosas@correo.uady.mx'
    ],
];
//experts
$waterExperts = [
    [
        'name' => 'Dr. Roger Méndez Novelo',
        'role' => 'Facultad de Ingeniería',
        'email' => 'mnovelo@uady.mx'
    ],
    [
        'name' => 'Dr. Carlos Quintal Franco',
        'role' => 'Facultad de Ingeniería',
        'email' => 'carlos.quintal@uady.mx'
    ],
    [
        'name' => 'I.Q.I. Carlos Peraza Lizama',
        'role' => 'Facultad de Ingeniería Química',
        'email' => 'plizama@uady.mx'
    ]
];
$wasteExperts = [
    [
        'name' => 'Dra. Diana Cabañas Vargas',
        'role' => 'Facultad de Ingeniería Química',
        'email' => 'cvargas@uady.mx'
    ], [
        'name' => 'Dra. María del Carmen Ponce Caballero',
        'role' => 'Facultad de Ingeniería',
        'email' => 'cponce@uady.mx'
    ], [
        'name' => 'Q.I. José Apolinar Ferrer Pérez',
        'role' => 'Facultad de Química',
        'email' => 'jose.ferrer@uady.mx'
    ]
];
$constructionExperts = [
    [
        'name' => 'Arq. José González Vadillo',
        'role' => 'Secretaría General',
        'email' => 'jose.gonzalez@uady.mx'
    ], [
        'name' => 'Dr. José Humberto Loría Arcila',
        'role' => 'Facultad de Ingeniería',
        'email' => 'jose.loria@uady.mx'
    ], [
        'name' => 'M. en I. Selene Aimée Audeves Pérez',
        'role' => 'Facultad de Ingeniería',
        'email' => 'selene.audeves@uady.mx'
    ],
];
$natureExperts = [
    [
        'name' => 'Dr. Salvador Flores Guido',
        'role' => 'Campus de Ciencias Biológicas y Agropecuarias',
        'email' => 'fguido@uady.mx'
    ], [
        'name' => 'Dr. Juan de la Cruz Tun Garrido',
        'role' => 'Campus de Ciencias Biológicas y Agropecuarias',
        'email' => 'tgarrido@uady.mx'
    ], [
        'name' => 'Dr. Rubén Cornelio Montes Pérez',
        'role' => 'Campus de Ciencias Biológicas y Agropecuarias',
        'email' => 'mperez@uady.mx'
    ], [
        'name' => 'Dr. Juan Bautista Chablé Santos',
        'role' => 'Campus de Ciencias Biológicas y Agropecuarias',
        'email' => 'jcsantos@uady.mx'
    ], [
        'name' => 'Dr. José Carlos Cervera Herrera',
        'role' => 'Campus de Ciencias Biológicas y Agropecuarias',
        'email' => 'carlos.cervera@uady.mx'
    ],
];
$airExperts = [
    [
        'name' => 'I.Q.I. Lester Pavón Martínez',
        'role' => 'Facultad de Ingeniería Química',
        'email' => 'lester.pavon@uady.mx'
    ]
];
$groundExperts = [
    [
        'name' => 'Dr. Héctor Estrada Medina',
        'role' => 'Campus de Ciencias Biológicas y Agropecuarias',
        'email' => 'hector.estrada@uady.mx'
    ]
];
$securityAndHygieneExperts = [
    [
        'name' => 'C.D. Jhonny Granados Balam',
        'role' => 'Secretaría General',
        'email' => 'j.granados@uady.mx'
    ], [
        'name' => 'M en C. Fernando Herrera y Gómez ',
        'role' => 'Dirección General de Administración y Desarrollo de Personal',
        'email' => 'hgomez@uady.mx'
    ], [
        'name' => 'MDO. Álvaro King Cardeña',
        'role' => 'Dirección General de Administración y Desarrollo de Personal',
        'email' => 'alvaro.king@uady.mx'
    ],
];
$environmentalImpactExperts = [
    [
        'name' => 'Dr. German Giácoman',
        'role' => 'Facultad de Ingeniería',
        'email' => 'giacoman@uady.mx'
    ],
    [
        'name' => 'Dr. Víctor Parra Tabla',
        'role' => 'Campus de Ciencias Biológicas y Agropecuarias',
        'email' => 'ptabla@uady.mx'
    ]
];
$energyExperts = [
    [
        'name' => 'Dr. Julio Sacramento Rivero',
        'role' => 'Facultad de Ingeniería Química',
        'email' => 'julio.sacramento@uady.mx'
    ],
    [
        'name' => 'Dr. Rubén Medina Esquivel',
        'role' => 'Facultad de Ingeniería',
        'email' => 'ruben.medina@uady.mx'
    ]];

$educationTeam = [
    [
        'name' => 'Q.I. José Apolinar Ferrer Pérez',
        'role' => 'Facultad de Química',
        'email' => 'jose.ferrer@uady.mx',
    ],

    [
        'name' => 'Abog. Pamela Pereyra Azcorra',
        'role' => 'Facultad de Medicina',
        'email' => 'pamela.pereyra@uady.mx',
    ],

    [
        'name' => 'M. en C. Sandra Elena Hernández Solís',
        'role' => 'Facultad de Odontología',
        'email' => 'hsolis@uady.mx',
    ],

    [
        'name' => 'L.E. Lizbeth Paulina Padrón Aké',
        'role' => 'Facultad de Enfermería',
        'email' => 'lizbeth.padron@uady.mx',
    ],
    [
        'name' => 'Ing. Isis Elizabeth Rodríguez Pérez',
        'role' => 'Facultad de Arquitectura',
        'email' => 'isis.rodriguez@uady.mx',
    ],

    [
        'name' => 'M. en Ed. Rita Minelia Vermont Ricalde',
        'role' => 'Facultad de Medicina Veterinaria y Zootecnia',
        'email' => 'vrical@uady.mx',
    ],

    [
        'name' => 'Mtro. Geovany Rodríguez Solís',
        'role' => 'Facultad de Educación',
        'email' => 'rsolis@uady.mx',
    ],

    [
        'name' => 'Abog. Xicotencatl Cámara Acevedo ',
        'role' => 'Facultad de Derecho',
        'email' => 'asesorias_xicotencatlcamara@hotmail.com',
    ],
];

$committee = [
    [
        'name' => 'Dra. María del Carmen Ponce Caballero',
        'role' => 'Campus de Ciencias Exactas e Ingenierías',
        'email' => 'cponce@correo.uady.mx',
    ],

    [
        'name' => 'Dr. Wilbert Trejo Lizama',
        'role' => 'Campus de Ciencias Biológicas y Agropecuarias',
        'email' => 'wtlizama@correo.uady.mx',
    ],
    [
        'name' => 'M en C. Daniel Humberto Rosas Sánchez',
        'role' => 'Campus de Ciencias de la Salud',
        'email' => 'daniel.rosas@correo.uady.mx',
    ],

    [
        'name' => 'Dr. Raúl Ernesto Canto Cetina',
        'role' => 'Campus de Arquitectura, Arte y Diseño',
        'email' => 'ccetina@uady.mx',
    ],
    [
        'name' => 'Dra. Amarella Eastmond Spencer',
        'role' => 'Campus de Ciencias Sociales Económico - Administrativas y Humanidades',
        'email' => 'espencer@uady.mx',
    ],
];

$template = [
    [
        'name' => '',
        'role' => '',
        'email' => ''
    ]
]
?>
<?php

$items = [
    [
        'label' => 'Equipo de Administración',
        'items' => [
            [
                'label' => '<i class="glyphicon glyphicon-chevron-right"></i> Directivos',
                'encode' => false,
                'content' => $this->render('contacts', [
                    'people' => $sgaDirectives
                ]),
                'active' => true
            ],
            [
                'label' => '<i class="glyphicon glyphicon-chevron-right"></i> Equipo de Administración del SGA',
                'encode' => false,
                'content' => $this->render('contacts', [
                    'people' => $sgaTeam
                ]),
            ],
        ],
    ],
    [
        'label' => 'Alta Dirección',
        'items' => [
            [
                'label' => '<i class="glyphicon glyphicon-chevron-right"></i> DIRECTIVOS',
                'encode' => false,
                'content' => $this->render('contacts', [
                    'people' => $highDirectives
                ]),
            ],
            [
                'label' => '<i class="glyphicon glyphicon-chevron-right"></i> CAMPUS DE CIENCIAS SOCIALES ECONÓMICO-ADMINISTRATIVAS Y HUMANIDADES',
                'encode' => false,
                'content' => $this->render('contacts', [
                    'people' => $campusSocial
                ]),
            ],
            [
                'label' => '<i class="glyphicon glyphicon-chevron-right"></i> CAMPUS DE CIENCIAS EXACTAS E INGENIERÍA',
                'encode' => false,
                'content' => $this->render('contacts', [
                    'people' => $campusExacts
                ]),
            ],
            [
                'label' => '<i class="glyphicon glyphicon-chevron-right"></i> CAMPUS DE CIENCIAS BIOLÓGICAS Y AGROPECUARIAS',
                'encode' => false,
                'content' => $this->render('contacts', [
                    'people' => $campusBiology
                ]),
            ], [
                'label' => '<i class="glyphicon glyphicon-chevron-right"></i> CAMPUS DE CIENCIAS DE LA SALUD',
                'encode' => false,
                'content' => $this->render('contacts', [
                    'people' => $campusHealth
                ]),
            ],
        ]
    ],
    [
        'label' => 'Auditores Ambientales',
        'content' => $this->render('contacts', [
            'people' => $environmentalAuditors
        ]),
    ],
    [
        'label' => 'Equipo de Implementación',
        'items' => [
            [
                'label' => '<i class="glyphicon glyphicon-chevron-right"></i> CAMPUS DE CIENCIAS SOCIALES ECONÓMICO-ADMINISTRATIVAS Y HUMANIDADES ',
                'encode' => false,
                'content' => $this->render('contacts', [
                    'people' => $implementationTeamSocial
                ]),
            ],
            [
                'label' => '<i class="glyphicon glyphicon-chevron-right"></i> CAMPUS DE CIENCIAS EXACTAS E INGENIERÍA',
                'encode' => false,
                'content' => $this->render('contacts', [
                    'people' => $implementationTeamExacts
                ]),
            ],
            [
                'label' => '<i class="glyphicon glyphicon-chevron-right"></i> CAMPUS DE CIENCIAS BIOLÓGICAS Y AGROPECUARIAS ',
                'encode' => false,
                'content' => $this->render('contacts', [
                    'people' => $implementationTeamBiology
                ]),
            ],
            [
                'label' => '<i class="glyphicon glyphicon-chevron-right"></i> CAMPUS DE CIENCIAS DE LA SALUD ',
                'encode' => false,
                'content' => $this->render('contacts', [
                    'people' => $implementationTeamHealth
                ]),
            ],
        ]
    ],
    [
        'label' => 'Comité de Expertos',
        'items' => [
            [
                'label' => '<i class="glyphicon glyphicon-chevron-right"></i> Agua ',
                'encode' => false,
                'content' => $this->render('contacts', [
                    'people' => $waterExperts
                ]),
            ], [
                'label' => '<i class="glyphicon glyphicon-chevron-right"></i> Residuos ',
                'encode' => false,
                'content' => $this->render('contacts', [
                    'people' => $wasteExperts
                ]),
            ], [
                'label' => '<i class="glyphicon glyphicon-chevron-right"></i> Construcciones ',
                'encode' => false,
                'content' => $this->render('contacts', [
                    'people' => $constructionExperts
                ]),
            ], [
                'label' => '<i class="glyphicon glyphicon-chevron-right"></i> Flora y Fauna',
                'encode' => false,
                'content' => $this->render('contacts', [
                    'people' => $natureExperts
                ]),
            ], [
                'label' => '<i class="glyphicon glyphicon-chevron-right"></i> Aire ',
                'encode' => false,
                'content' => $this->render('contacts', [
                    'people' => $airExperts
                ]),
            ], [
                'label' => '<i class="glyphicon glyphicon-chevron-right"></i> Suelo ',
                'encode' => false,
                'content' => $this->render('contacts', [
                    'people' => $groundExperts
                ]),
            ], [
                'label' => '<i class="glyphicon glyphicon-chevron-right"></i> Seguridad e Higiene ',
                'encode' => false,
                'content' => $this->render('contacts', [
                    'people' => $securityAndHygieneExperts
                ]),
            ], [
                'label' => '<i class="glyphicon glyphicon-chevron-right"></i> Impacto Ambiental ',
                'encode' => false,
                'content' => $this->render('contacts', [
                    'people' => $environmentalImpactExperts
                ]),
            ], [
                'label' => '<i class="glyphicon glyphicon-chevron-right"></i> Energia ',
                'encode' => false,
                'content' => $this->render('contacts', [
                    'people' => $energyExperts
                ]),
            ],
        ]
    ],
    [
        'label' => 'Equipo de Educación',
        'content' => $this->render('contacts', [
            'people' => $educationTeam
        ]),
    ], [
        'label' => 'Comite Formulador y Evaluador de la Asignatura Ambiental',
        'content' => $this->render('contacts', [
            'people' => $committee
        ]),
    ],
];
// Above
?>

<!-- about start -->

<div class="container">

    <div class="row">


        <div class="pfblock-header wow fadeInUp">
            <h2 class="pfblock-title">Directorio</h2>
            <div class="pfblock-line"></div>
            <?= TabsX::widget([
                'items' => $items,
                'position' => TabsX::POS_ABOVE,
                'align' => TabsX::ALIGN_CENTER,
                'encodeLabels' => false
            ]); ?>
        </div>


    </div><!-- .row -->


</div><!-- .row -->

<!-- about end -->