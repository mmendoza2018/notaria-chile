-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3310
-- Tiempo de generación: 19-09-2023 a las 01:13:52
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `notaria_chile`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` int(11) NOT NULL,
  `descripcion` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `requerimientos` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `ruta` varchar(250) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`id`, `nombre`, `tipo`, `descripcion`, `requerimientos`, `ruta`) VALUES
(1, 'Finiquito\r\n', 4, 'El finiquito es un documento legal que establece los términos finales de una relación laboral, incluyendo salario, beneficios e indemnizaciones, y evita futuros conflictos. Es importante redactarlo de manera clara y seguir los requisitos legales pertinentes.', '**Traer carnet.<br>\n**Traer antecedentes.<br>\nCédula de identidad vigente.<br>\nProyecto de finiquito (tres copias). <br>\nPlanillas de cotizaciones previsionales del trabajador o certificado que acredite su pago íntegro.<br>\n\nOtros antecedentes:\n<br>\nPoder simple, si el trámite es realizado por un representante del trabajador o el empleador.', 'assets/img/portfolio/finiquito1.jpg'),
(2, 'Anexo de Finiquito', 4, 'El anexo de finiquito es un documento complementario al finiquito que proporciona información adicional sobre la finalización de una relación laboral, evitando malentendidos y conflictos posteriores.', 'En Chile, para obtener un anexo de finiquito, es necesario que la relación laboral entre el empleado y el empleador haya terminado. Luego de la finalización del contrato, el empleador debe entregar al trabajador el finiquito, el cual es un documento que certifica que se han cumplido todas las obligaciones laborales y que no existen deudas pendientes.\r\n<br>\r\nSi el trabajador detecta que existen pagos pendientes, debe notificar al empleador para que sean incorporados al finiquito o al anexo de finiquito, si este ya se ha firmado. En caso de que el empleador no entregue el finiquito o el anexo de finiquito en los plazos establecidos por la ley, el trabajador puede denunciarlo ante la Inspección del Trabajo.\r\n<br>\r\nEn términos generales, los requerimientos para obtener un anexo de finiquito en Chile son haber finalizado una relación laboral y haber detectado alguna obligación pendiente que no haya sido incorporada en el finiquito. Es importante destacar que la ley establece plazos para la entrega del finiquito y el anexo de finiquito, y que estos documentos deben ser redactados de manera clara y detallada para evitar conflictos posteriores.', 'assets/img/portfolio/testamento.jpg'),
(3, 'Anexo de Contrato de Trabajo - Chilenos\r\n\r\n', 4, 'El anexo de contrato de trabajo en Chile modifica los términos y condiciones acordados previamente entre el empleador y el trabajador. Este documento es un complemento al contrato laboral original y debe ser redactado de forma clara, detallada y firmado por ambas partes.', 'Para obtener un anexo de contrato de trabajo en Chile, es necesario:\r\n<br><br>\r\nAcuerdo mutuo entre empleador y trabajador para modificar los términos y condiciones del contrato original.<br>\r\nRedactar un anexo de contrato laboral detallado, claro y preciso que especifique las nuevas condiciones acordadas.<br>\r\nAmbas partes deben firmar el anexo de contrato laboral.<br>\r\nEntregar una copia del anexo de contrato laboral a cada parte.<br>\r\nCumplir con las normativas y regulaciones establecidas por la ley laboral chilena.<br>\r\nEn algunos casos, puede ser necesario presentar documentación que respalde la necesidad de modificar los términos y condiciones del contrato original. Por ejemplo, un certificado médico o un documento que acredite la relación de parentesco.', 'assets/img/portfolio/herencia.jpg'),
(4, 'Renuncia Voluntaria', 4, 'La renuncia voluntaria es cuando un empleado decide dejar su trabajo de forma voluntaria y lo comunica a su empleador a través de una carta de renuncia. Puede haber diversas razones detrás de esta decisión, y puede tener implicaciones para ambas partes.', 'Para presentar una renuncia voluntaria, debes seguir los siguientes pasos:\r\n<br>\r\n<br>\r\nRedactar una carta de renuncia en la que se detalle la causa y la fecha de salida.\r\n<br>\r\nComunicar verbalmente a tu empleador tu intención de renunciar.\r\n<br>\r\nEntregar la carta de renuncia por escrito y firmada a tu empleador.\r\n<br>\r\nCumplir con el plazo de preaviso establecido en tu contrato o en la legislación laboral aplicable.\r\n<br>\r\nDevolver los bienes de la empresa en tu poder, como llaves, uniformes, herramientas, entre otros.\r\n<br>\r\nEs importante destacar que los requerimientos pueden variar según la legislación laboral aplicable en cada país o según las políticas internas de la empresa.', 'assets/img/portfolio/acta.jpg'),
(5, 'Capitulaciones matrimoniales', 1, 'Acuerdo entre cónyuges cuyo objetivo esencial es pactar un régimen económico conyugal, así como liquidar el anterior.', '¿Cómo presentar capitulaciones matrimoniales?\r\nLas capitulaciones se pueden efectuar antes o después de contraer matrimonio. El único requisito es que los dos cónyuges estén de acuerdo y acudan a un notario para que les asesore, redacte y autorice la escritura pública, que deberá inscribirse en el Registro Civil.', 'assets/img/portfolio/capitulaciones-matrimoniales.jpg'),
(6, 'Compraventa', 2, 'Contrato por virtud del cual uno de los contratantes se obliga a transferir la propiedad de una cosa o derecho y el otro se obliga a pagar por ello un precio convenido. Puede ser de inmuebles, muebles o derechos.', '', ''),
(7, 'Poder', 2, 'Facultad que se da a otra persona para realizar y ejecutar determinados actos jurídicos y materiales en nuestro nombre. El apoderado no tiene que aceptar el poder, es una decisión unilateral del poderdante. ', '¿Qué se necesita para dar un poder notarial?\r\nLlenar una solicitud.\r\nComparecencia de la persona facultada para otorgar poder a nombre de la persona moral.\r\nPresentar original y copia de una identificación oficial con fotografía y firma: ...\r\nEntregar copia certificada reciente (mínimo seis meses de anterioridad) del acta constitutiva de la sociedad.', 'assets/img/portfolio/poder.jpg'),
(8, 'Declaración de herederos abintestato', 2, 'Es heredero abintestato aquella persona o personas que, al no haber un heredero nombrado en testamento, lo es por establecerlo la ley. Para ser nombrado heredero abintestato es necesario formalizar un expediente de declaración ante notario.', 'La declaración de herederos abintestato es el documento público que permite determinar, de conformidad con la legislación civil aplicable a cada caso, quiénes son los herederos de una persona fallecida que no ha otorgado testamento y en qué proporción lo son.', 'assets/img/portfolio/declaracion-de-herederos.jpg'),
(9, 'Bodas, separaciones y divorcios', 2, 'Actualmente puede contraerse matrimonio ante notario. Los cónyuges también pueden divorciarse de mutuo acuerdo (o separarse) acud', '¿Cómo se lleva a cabo un proceso de divorcio?\r\nEl divorcio puede solicitarse por uno de los cónyuges manifestando únicamente su voluntad de no querer continuar en matrimonio. El Juez podrá decretar la disolución del vínculo matrimonial sin necesidad de que el cónyuge promovente exprese motivo alguno.', 'assets/img/portfolio/bodas.jpg'),
(10, 'Préstamo hipotecario', 4, 'Préstamo que tiene como garantía de pago un bien inmueble o varios, ya sean viviendas, locales, garajes, solares, etc. ', 'Algunos requisitos para comprobar su capacidad de pago son:<br>\r\n\r\nPara trabajadores dependientes, copia de sus últimas liquidaciones de sueldo.<br>\r\nCopia de su contrato, si corresponde, para acreditar antigüedad laboral.<br>\r\nCédula de identidad.<br>\r\nPara trabajadores independientes, declaraciones de renta que acrediten sus ingresos.<br>\r\nAcreditación de otros bienes que pueda tener como autos, participación en empresas, bienes raíces, etc.<br>\r\nEn caso de complementar renta con otra persona, le serán solicitados los mismos antecedentes.<br>\r\nAdemás, se le solicitarán todos los antecedentes de la propiedad que está comprando de manera de confirmar que se podrá poner a nombre del deudor e hipotecar a nombre del banco.<br>\r\n\r\nPor último, debe tener en cuenta que cada institución, más allá del cumplimiento legal, posee autonomía para establecer las condiciones que estimen conveniente al momento de otorgar el crédito.<br>', 'assets/img/portfolio/prestamo-hipotecario.jpg'),
(11, 'Préstamo personal', 4, 'El préstamo es un contrato por la cual una entidad financiera o no financiera o un particular ponen a nuestra disposición una cantidad determinada de dinero.', '', ''),
(12, 'Donación', 4, 'La donación es un contrato mediante el cual una persona transfiere gratuitamente bienes a otra.', '', ''),
(13, 'Constitución de sociedades mercantiles', 4, 'Acto de fundación de una sociedad en el que se definen elementos básicos: capital inicial, domicilio, régimen jurídico, etc. ', '', ''),
(14, 'Póliza', 4, ' Documento mercantil redactado por una de las partes. Si la interviene un notario tiene efectos a la hora de exigir por vía judicial lo pactado en ella.', '', ''),
(15, 'Poder administración inmueble', 5, 'Las personas interesadas en alquilar una propiedad (como una casa, apartamento u otro tipo de inmueble) tienen la opción de encomendar la gestión y administración de la misma a un tercero. Esto implica que dicho tercero se encargará de manejar aspectos como la búsqueda de arrendatarios, el cobro de pagos, la gestión de cuentas, la celebración de documentos y cualquier otro asunto relacionado, todo ello con el objetivo de cumplir con las responsabilidades establecidas en el contrato de arrendamiento.', '📝 Es necesario que al menos uno de los propietarios (una persona física) se presente personalmente para otorgar el poder, presentando una cédula de identidad válida.<br>\r\n<br>\r\n📝 Se requiere una copia actualizada de la inscripción de la propiedad, obtenida en el Conservador de Bienes Raíces, que certifique su vigencia.', ''),
(16, 'Poder bancario simple - Persona Natural', 5, 'Un poder bancario simple es un documento legal que otorga autoridad a una persona natural para llevar a cabo operaciones y gestionar asuntos relacionados con una cuenta bancaria en nombre del titular o propietario de la cuenta. Este tipo de poder generalmente abarca actividades básicas y comunes, como realizar depósitos, retiros, transferencias, solicitud, cobro y recepción de cheques, pagar facturas y administrar transacciones financieras.', '📝 El otorgante del poder debe comparecer en persona, presentando una cédula de identidad válida.', ''),
(17, 'Poder bancario simple - Persona Jurídica', 5, 'El poder bancario simple para personas jurídicas permite a una empresa otorgar poder a un tercero, quien debe ser una persona natural, para actuar en su nombre y representación ante una entidad bancaria específica. Este poder faculta al tercero para realizar operaciones y gestionar asuntos relacionados con la cuenta bancaria de la empresa, como realizar depósitos, retiros, transferencias y otras transacciones financieras.', '📝 El Representante Legal deberá comparecer en persona, presentando su cédula de identidad válida.<br>\r\n<br>\r\n📝 Además, se requerirá la presentación de la escritura de constitución de la empresa, la cual debe estar vigente, para validar la autoridad del Representante Legal. En caso de que la escritura de constitución tenga una antigüedad de más de un año, se deberá verificar la vigencia del poder del Representante Legal mediante un documento adicional.\r\n', ''),
(18, 'Poder de matricula', 5, 'Contrato por virtud del cual uno de los contratantes se obliga a transferir la propiedad de una cosa o derecho y el otro, a su vez, se obliga a pagar por ello un precio convenido', '', ''),
(19, 'Poder especial SII - Persona Natural', 5, 'El mandato especial SII (persona natural) brinda la posibilidad a una persona de otorgar poder a otra persona natural, con el fin de que actúe en su representación con amplios poderes ante el Servicio de Impuestos Internos y otras instituciones pertinentes donde se requiera dicho poder.<br>\r\n\r\nEste documento legal permite al tercero designado llevar a cabo trámites, gestiones y operaciones en nombre de la persona, incluyendo la presentación de declaraciones de impuestos, la realización de pagos, la obtención de certificados y cualquier otra acción necesaria ante el Servicio de Impuestos Internos y otras entidades correspondientes.<br>\r\n\r\nEl mandato especial SII (persona natural) es una herramienta importante para asegurar una adecuada representación y facilitar el cumplimiento de obligaciones fiscales y administrativas por parte de la persona ante las autoridades competentes.', '📝 La persona natural que otorga el poder debe comparecer en persona, presentando su cédula de identidad vigente.', ''),
(20, 'Poder especial SII - Persona Jurídica', 5, 'El mandato especial SII (persona jurídica) brinda la posibilidad a una empresa de otorgar poder a una persona natural, con el fin de que actúe en su representación con amplios poderes ante el Servicio de Impuestos Internos y otras instituciones relevantes donde se requiera dicho poder.<br>\r\n\r\nEste documento legal permite al tercero designado llevar a cabo trámites, gestiones y operaciones en nombre de la empresa, incluyendo la presentación de declaraciones de impuestos, la realización de pagos, la obtención de certificados y cualquier otra acción necesaria ante el Servicio de Impuestos Internos y otras entidades correspondientes.<br>\r\n\r\nEl mandato especial SII es una herramienta importante para asegurar una adecuada representación y facilitar el cumplimiento de obligaciones fiscales y administrativas por parte de la empresa ante las autoridades competentes.', '📝 El Representante Legal debe comparecer en persona, presentando su cédula de identidad vigente.<br>\r\n<br>\r\n📝 Además, se requerirá la presentación de la escritura de constitución de la empresa, la cual debe estar vigente, para validar la autoridad del Representante Legal.<br>\r\n<br>\r\n✒ En el caso de que la escritura de constitución tenga una antigüedad superior a un año, será necesario verificar la vigencia del poder otorgado al Representante Legal mediante un documento adicional.', ''),
(21, 'Carta Poder - Vehículo ', 6, 'Un poder de venta es un documento legal que se crea y se firma ante un notario, mediante el cual el propietario de un vehículo otorga autorización a otra persona para que lo represente en todos los asuntos relacionados con la venta y transferencia de su automóvil.<br>\r\n\r\nEste poder de venta confiere al representante designado la capacidad de realizar actos en nombre del propietario, como negociar el precio, firmar contratos de compra-venta, realizar trámites administrativos y legales, y llevar a cabo cualquier otra gestión necesaria para completar exitosamente la venta y transferencia del vehículo.', '🚗 Es necesario que el dueño del vehículo comparezca en persona, presentando su cédula de identidad vigente.<br><br>\r\n🚗 Certificado de anotaciones vigentes del vehículo a vender, el cual deberá ser expedido en la fecha en que se firmará el poder.<br><br>\r\n🚗 El vehículo no debe estar con gravámenes, prendas o prohibiciones de actos, asegurando así su libre disponibilidad y la validez de la transacción.', ''),
(22, 'Carta Poder - Alterar Vehículo ', 6, 'Permite a un tercero la capacidad de modificar y alterar las propiedades y características de un vehículo motorizado en el Servicio de Registro Civil e Identificación (SRCeI) a su entera discreción. Con este poder, el individuo posee la autoridad para realizar cambios significativos en el automóvil, incluyendo la posibilidad de modificar su apariencia física, realizar ajustes en su rendimiento y potencia, así como implementar mejoras en su sistema de seguridad y tecnología.', '🚗 Comparecencia personal del dueño del vehículo con cédula de identidad vigente.<br><br>\r\n🚗 Permiso de circulación vigente.<br><br>\r\n🚗 Certificado de anotaciones vigente', ''),
(23, 'Carta Poder - Placas de Vehículo ', 6, 'Otorgar a un tercero la autorización para solicitar un duplicado o reemplazo de las placas patente de un vehículo en caso de extravío o deterioro que las vuelva inutilizables ante las autoridades del Registro Civil.', '🚗 Comparecencia personal de la persona natural que entrega el poder, con cédula de identidad vigente.<br><br>\r\n🚗 Permiso de circulación vigente.<br><br>\r\n🚗 Certificado de anotaciones vigente.', ''),
(24, 'Carta Poder - Retirar Vehículo ', 6, 'Este poder confiere al titular la capacidad de retirar un vehículo de custodia. Con este poder, el individuo posee la autoridad para tomar posesión y trasladar el vehículo. <br>Esta facultad puede ser ejercida en diferentes situaciones, como el incumplimiento de pagos, violaciones de contratos de arrendamiento, abandono del vehículo o cualquier otra circunstancia en la que sea necesario recuperar el vehículo. ', '🚗 La comparecencia personal del otorgante (persona natural) que entrega del poder con su cédula de identidad vigente.\r\n🚗 Datos completos de la persona a la cual se le otorgará dicho poder.', ''),
(25, 'Compraventa de Vehículo ', 6, 'El poder de compraventa de vehículos, permite que un tercero realice la venta del vehículo con un precio fijo autorizado. Con este poder, el individuo tiene la facultad de representar al propietario del vehículo y realizar todas las gestiones necesarias para llevar a cabo la transacción de compra o venta. Esto incluye la facultad de firmar contratos, realizar pagos, transferir la titularidad del vehículo, entregar los documentos pertinentes y cualquier otro acto necesario para completar la compraventa de manera legal y válida.', '🚗 Comparecencia personal del propietario del vehículo, quien deberá estar presente y contar con una cédula de identidad vigente.<br>\r\n<br>\r\n🚗 Presentar el certificado de anotaciones vigentes del vehículo que se desea vender. Dicho certificado debe ser obtenido el mismo día en que se firmará el poder.<br>\r\n<br>\r\n🚗 Es fundamental que el vehículo no presente ninguna prenda o prohibición de actos que pueda afectar su venta.<br>\r\n<br>\r\n🚗 Se requerirán los datos completos de la persona a quien se le otorgará el poder.\r\n', ''),
(26, 'Certificado de Residencia (Declaración Jurada de Residencia)', 3, 'El certificado de residencia o declaración jurada de residencia es un documento oficial que certifica la residencia de una persona en una dirección específica. Su finalidad principal es servir como prueba de residencia o domicilio ante diversas entidades, ya sea empresas, servicios, instituciones bancarias o entidades públicas.<br>\r\n\r\nPara corroborar la dirección de residencia, es imprescindible que la persona solicite un certificado de residencia a través de una notaria, siendo esta el primer medio para demostrar su residencia. Otras formas de prueba de residencia pueden ser, facturas de servicios públicos, estados de cuenta bancarios u otros documentos similares, no son aceptados como pruebas válidas por sí mismos. Es importante destacar que el certificado de residencia no está vinculado a la nacionalidad de la persona ni necesariamente a su estado civil.', '📜 Cedula de identidad vigente del declarante.', ''),
(27, 'Declaración jurada - Alcoholes', 3, 'La declaración jurada de alcoholes es un documento legal que se utiliza para informar y certificar el tipo de actividad relacionada con la venta, distribución, renovación de patentes y otros de bebidas alcohólicas. Esta declaración se presenta ante las autoridades competentes, como los organismos encargados de la regulación y control de la venta de alcohol, como la Municipalidad o el Servicio de Impuestos Internos, dependiendo de la jurisdicción correspondiente.', '📜 Cedula de identidad vigente del declarante.', ''),
(28, 'Declaración Jurada - Carro de Arrastre', 3, 'La declaración jurada de carro de arrastre es un documento utilizado para certificar la propiedad y características de un remolque o carro de arrastre. Esta declaración se presenta ante las autoridades correspondientes encargadas de regular y controlar el uso de este tipo de vehículos.', '📜 Cedula de identidad vigente del declarante.<br><br>\r\n📜 Se debe presentar una declaración de ingreso en la cual se especifiquen los antecedentes del carro de arrastre, incluyendo:<br><br>\r\n\r\n* Marca del remolque. En caso de no contar con una marca específica, se debe declarar que es de fabricación casera o artesanal.<br>\r\n* Modelo, en caso de que haya sido adquirido en una empresa especializada. Si el remolque es de fabricación casera, se debe declarar que no tiene modelo.<br>\r\n* Color.<br>\r\n* Capacidad de carga. En caso de que la capacidad supere los 750 Kg, se debe asegurar que el remolque cuente con freno independiente.<br>\r\n* Número de ejes y ruedas por eje.<br>\r\n* Año de fabricación.', ''),
(29, 'Declaración jurada - Cesantía', 3, 'La declaración jurada de cesantía es un documento utilizado para certificar la condición de desempleo de una persona y solicitar beneficios o ayudas destinadas a los trabajadores en situación de cesantía. Esta declaración se realiza ante las autoridades competentes u otros organismos encargados de administrar programas de apoyo para personas desempleadas.', '📜 Cedula de identidad vigente del declarante.', ''),
(30, 'Declaración Jurada - Donante', 3, 'La declaración jurada de donante es un documento mediante el cual una persona expresa su voluntad de donar órganos, tejidos o partes de su cuerpo después de su fallecimiento, con el propósito de ayudar a mejorar la calidad de vida o salvar vidas de otras personas que necesitan un trasplante.', '📜 Cedula de identidad vigente del declarante.', ''),
(31, 'Declaración Jurada - No Donante', 3, 'Permite inscribirse en el Registro Nacional de No Donantes, que contiene los datos las personas que han renunciado a ser donantes de órganos o partes de su cuerpo después de su fallecimiento. Este documento permite dejar constancia de la decisión de no participar en el proceso de donación.', '📜 Cedula de identidad vigente del declarante.', ''),
(32, 'Declaración Jurada - Expensas', 3, 'La declaración jurada de expensas es un documento que debe ser solicitado y certificado por un notario público, y que tiene como propósito acreditar que una persona asumirá los gastos y costos de sustento de otra persona. Este tipo de declaración es comúnmente utilizado por solicitantes de residencia que desean demostrar su capacidad económica para mantener a su grupo familiar, así como por ciudadanos chilenos que se comprometen a proveer sustento financiero a sus familiares extranjeros.', '📜 Cedula de identidad vigente del declarante.', ''),
(33, 'Declaración Jurada - Extravío licencia de conducir', 3, 'La declaración jurada por extravío de licencia de conducir es un documento utilizado para informar oficialmente la pérdida o extravío de la licencia de conducir. De este modo, el titular de la licencia no será responsable en caso de que un tercero haga mal uso de ella.<br>\r\nJuzgados de policía local y municipalidades, solicitan frecuentemente que se declare bajo juramento la pérdida de una licencia de conducir o carnet de conducir para la reposición de la misma o bien para otros.', '📜 Cedula de identidad vigente del declarante.', ''),
(34, 'Declaración Jurada - Ingresos', 3, 'La declaración jurada de ingresos permite a las personas dejar constancia de los ingresos brutos y en la labor desempeñada (puesto de trabajo). Esta declaración se realiza con el propósito de proporcionar información precisa y veraz sobre los ingresos obtenidos.', '📜 Cedula de identidad vigente del declarante.<br><br>\r\n📜 Si tienes un contrato de trabajo, es necesario un certificado de antigüedad laboral. \r\n', ''),
(35, 'Declaración Jurada - No Partido Político', 3, 'La declaración jurada de no pertenecer a un partido político es un documento utilizado para declarar oficialmente que una persona no está afiliada a ningún partido político en la actualidad.', '📜 Cedula de identidad vigente del declarante.', ''),
(36, 'Declaración Jurada - Redacción propia Persona Natural', 3, 'La declaración jurada es un documento en el cual una persona, realiza una manifestación formal y legalmente sobre un hecho o circunstancia específica. Esta declaración se realiza bajo juramento de veracidad y tiene el propósito de proporcionar información precisa y fidedigna.', '📜 Cedula de identidad vigente del declarante.', ''),
(37, 'Declaración Jurada - Redacción propia Persona Jurídica', 3, 'La declaración jurada es la manifestación personal escrita, donde se realiza una manifestación formal y legalmente sobre un hecho o circunstancia específica. Esta declaración se realiza bajo juramento de veracidad y tiene el propósito de proporcionar información precisa y fidedigna.', '📜 Cedula de identidad vigente del declarante.', ''),
(38, 'Declaración jurada de soltería CON testigos', 3, 'Para ciertos tramites la legislación chilena requiere la declaración del estado civil. Una opción para obtener este certificado es a través de un notario, con dos testigos mayores de 18 años que no sean parientes del interesado.', '📜 Cedula de identidad vigente del declarante.', ''),
(39, 'Declaración jurada de soltería SIN testigos', 3, 'Para ciertos trámites entre particulares, la legislación chilena requiere la declaración del estado civil. Una opción disponible para obtener este certificado es a través de un notario.', '📜 Cedula de identidad vigente del declarante.', ''),
(40, 'Declaración Jurada para Personal de la Administración Pública', 3, 'Este documento es exigido para ingresar a la Administración Pública, en el cual acredita tener salud compatible con el cargo (Artículo 12 letra c del Estatuto Administrativo), no haber cesado en un cargo público como consecuencia de haber obtenido una calificación deficiente, o por medida disciplinaria, en los últimos cinco años (Artículo 12 letra e del Estatuto Administrativo), no estar inhabilitado para el ejercicio de funciones o cargos públicos, no hallarse condenado por crimen o simple delito (Artículo 12 letra f del Estatuto Administrativo) y no estar afecto a las inhabilidades señaladas en el artículo de la Ley N° 18.575, Orgánica Constitucional de Bases Generales de la Administración del Estado.', '📜 Cedula de identidad vigente del declarante.', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id` int(11) NOT NULL,
  `hora` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `tipo` enum('AM','PM') COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id`, `hora`, `estado`, `tipo`) VALUES
(1, '09:00', 1, 'AM'),
(2, '09:30', 1, 'AM'),
(3, '10:00', 1, 'AM'),
(4, '10:30', 1, 'AM'),
(5, '11:00', 1, 'AM'),
(6, '11:30', 1, 'AM'),
(7, '12:00', 1, 'PM'),
(8, '12:30', 1, 'PM'),
(9, '13:00', 1, 'PM'),
(10, '15:00', 1, 'PM'),
(11, '15:30', 1, 'PM'),
(12, '16:00', 1, 'PM'),
(13, '16:30', 1, 'PM'),
(14, '17:00', 1, 'PM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `meses`
--

CREATE TABLE `meses` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `meses`
--

INSERT INTO `meses` (`id`, `nombre`) VALUES
(1, 'enero'),
(2, 'febrero'),
(3, 'marzo'),
(4, 'abril'),
(5, 'mayo'),
(6, 'junio'),
(7, 'julio'),
(8, 'agosto'),
(9, 'setiembre'),
(10, 'octubre'),
(11, 'noviembre'),
(12, 'diciembre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notarias`
--

CREATE TABLE `notarias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `latitud` decimal(10,0) NOT NULL,
  `longitud` decimal(10,0) NOT NULL,
  `referencia` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `comuna` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `notarias`
--

INSERT INTO `notarias` (`id`, `nombre`, `direccion`, `latitud`, `longitud`, `referencia`, `comuna`, `correo`) VALUES
(1, '1° Cuadra Gazmuri', 'Huérfanos 1160', '324', '34', 'Metro La Moneda', 'Santiago Centro', 'reservanotaria@notariacuadra.cl'),
(2, '7° María Soledad Santos', 'Agustinas 1161, entrepiso, Of. 18', '58', '56', 'Metro La Moneda', 'Santiago Centro', 'reservanotaria@notariasantos.cl'),
(3, '9° Pablo González Caamaño', 'Teatinos 333, entrepiso', '436', '653', 'Metro Santa Ana', 'Santiago Centro', 'reservanotaria@novenanotaria.cl'),
(4, '12° Pablo Piedrabuena', 'Teatinos 371 oficina 113', '2352', '23', 'Metro Santa Ana', 'Santiago Centro', ''),
(5, '13° Pablo Hales', 'Compañía de Jesús 1312', '987', '654', 'Metro Santa Ana', 'Santiago Centro', 'reservanotaria@notariahales.cl'),
(6, '14°  Sergio Rodríguez', 'Amunátegui 391', '98', '989', 'Metro Santa Ana', 'Santiago Centro', 'reservanotaria@notariarodriguez.cl'),
(7, '17° María Angélica Galán', 'Paseo Ahumada 236, piso 3', '10', '10', 'Metro Plaza de Armas', 'Santiago Centro', 'reservanotaria@notariagalan.cl'),
(8, '21° Myriam Amigo', 'Huérfanos 578', '34', '-22', 'Metro Santa Lucia', 'Santiago Centro', 'reservanotaria@notariamyriamamigo.cl'),
(9, '23° Renata González', 'Catedral 1265', '654', '465', 'Metro Santa Ana', 'Santiago Centro', 'reservanotaria@notariarenatagonzalez.cl'),
(10, '38º María Soledad Lascar', 'Miraflores 178, Piso 5', '-33', '-71', 'Metro Santa Lucia', 'Santiago Centro', 'reservanotaria@notarialascar.cl'),
(12, '40° Alberto Mozó', 'Teatinos 332', '655', '51', 'Metro Santa Ana', 'Santiago Centro', 'reservanotaria@notariamozo.cl'),
(13, '43° Ricardo San Martin', 'Huérfanos 835, Piso 18', '-33', '42', 'Metro Plaza de Armas', 'Santiago Centro', 'reservanotaria@notariasanmartin.cl'),
(14, '49° Wladimir Schramm', 'Amunátegui 73', '76', '45', 'Metro La Moneda', 'Santiago Centro', 'reservanotaria@49notaria.cl'),
(15, '50° Claudia Gómez Lucares', 'Teatinos 371, oficina 113', '76', '34', 'Metro Santa Ana', 'Santiago Centro', 'reservanotaria@notariaclaudiagomez.cl'),
(20, '2° Francisco Leiva', 'Alcántara 107', '10', '20', 'Metro Alcántara', 'Las Condes', 'reservanotaria@notarialeiva.cl'),
(21, '11° Susana Belmonte', 'Rosario Nte 555', '87', '54', 'Parque Araucano', 'Las Condes', ''),
(22, '22° Luis Tavolari', 'Don Carlos 2889', '32', '23', 'Metro Tobalaba', 'Las Condes', 'reservanotaria@notariatavolari.cl'),
(25, '34° Eduardo Díez Morello', 'AV. Luis Thayer Ojeda 359', '346', '567', 'Metro Tobalaba', 'Providencia', 'reservanotaria@notariadiez.cl'),
(26, '51° Cristian Camilla', 'AV. Nueva Providencia 2606', '645', '54', 'Metro Tobalaba', 'Providencia', 'reservanotaria@notariacamilla.cl'),
(29, '4° Andrés Vega', 'Calle José Manuel Balmaceda 371, local 113', '10', '14', 'Metro Plaza Puente Alto', 'Puente Alto', 'reservanotaria@notariavega.cl'),
(30, '2° Jaime Bernales Larraín', 'AV. Vicuña Mackenna Oriente 7163', '212', '9422', 'Metro Bellavista de la Florida', 'La Florida', 'reservanotaria@notariajaimebernales.cl'),
(35, '1° María Elena Leiva', 'Osa Menor 3506', '434', '332', 'Municipalidad de Lo Espejo', 'Lo Espejo', 'reservanotaria@notarialoespejo.cl');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `notaria` int(11) NOT NULL,
  `horario` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora_fin` varchar(45) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id`, `usuario`, `notaria`, `horario`, `fecha`, `hora_fin`, `fecha_creacion`) VALUES
(2, 18, 1, 1, '2023-09-07', NULL, '2023-09-06 22:56:31'),
(3, 18, 30, 8, '2023-09-08', NULL, '2023-09-06 22:58:45'),
(4, 29, 35, 8, '2023-09-07', '-', '2023-09-07 00:09:28'),
(5, 30, 2, 7, '2023-09-07', NULL, '2023-09-07 00:15:59'),
(6, 24, 2, 8, '2023-09-08', NULL, '2023-09-07 21:46:05'),
(7, 20, 2, 7, '2023-09-09', NULL, '2023-09-08 18:53:31'),
(8, 29, 2, 6, '2023-09-09', '-', '2023-09-08 19:03:23'),
(9, 31, 2, 5, '2023-09-09', NULL, '2023-09-09 12:21:27'),
(10, 32, 2, 12, '2023-09-09', NULL, '2023-09-09 12:22:50'),
(11, 33, 2, 7, '2023-09-10', NULL, '2023-09-09 12:24:23'),
(12, 34, 2, 7, '2023-09-10', NULL, '2023-09-09 12:26:45'),
(13, 35, 2, 7, '2023-09-10', NULL, '2023-09-09 12:28:55'),
(14, 36, 2, 7, '2023-09-11', NULL, '2023-09-11 10:39:20'),
(15, 37, 2, 7, '2023-09-11', NULL, '2023-09-11 10:47:13'),
(16, 20, 2, 7, '2023-09-15', '-', '2023-09-13 18:14:55'),
(17, 29, 2, 3, '2023-09-18', '-', '2023-09-13 18:16:19'),
(18, 38, 2, 8, '2023-09-15', NULL, '2023-09-13 18:18:10'),
(19, 39, 2, 6, '2023-09-15', NULL, '2023-09-13 18:22:07'),
(20, 40, 2, 6, '2023-09-15', NULL, '2023-09-13 18:25:13'),
(21, 41, 2, 9, '2023-09-15', NULL, '2023-09-13 18:29:14'),
(22, 42, 2, 7, '2023-09-18', NULL, '2023-09-16 23:17:48'),
(23, 43, 2, 9, '2023-09-18', NULL, '2023-09-16 23:19:59'),
(24, 44, 2, 10, '2023-09-18', NULL, '2023-09-16 23:47:53'),
(25, 45, 2, 8, '2023-09-18', NULL, '2023-09-18 18:09:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`id`, `descripcion`, `estado`) VALUES
(1, 'Autorización', 1),
(2, 'Contratos', 1),
(3, 'Declaración', 1),
(4, 'Laborales', 1),
(5, 'Poder', 1),
(6, 'Vehículos', 1),
(7, 'NUEVO TIPO', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nombres` varchar(40) NOT NULL,
  `mailfrom` varchar(50) NOT NULL,
  `apellidop` varchar(40) NOT NULL,
  `apellidom` varchar(40) NOT NULL,
  `rut` varchar(15) NOT NULL,
  `telefono` int(15) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `mailfrom`, `apellidop`, `apellidom`, `rut`, `telefono`, `fecha`) VALUES
(1, 'Andres Alejandro', 'andrs.gonzez@gmail.com', 'Gonzalez', 'Galaz', '1985761-3', 987654321, '2023-09-06 22:53:35'),
(18, 'Nicolas', 'nicolas@gesnot.cl', 'Mayorga', 'Schwentiger', '12.685.641-2', 923456987, '2023-09-06 22:53:35'),
(19, 'Andrés Alejandro', 'andrs.gonzez@gmail.com', 'González', 'Galaz', '19.858.761-3', 926045048, '2023-09-06 22:53:35'),
(20, 'Adolfo', 'adolfo@gesnot.cl', 'Norambuena', 'Notredame', '23.132.321-3', 987654321, '2023-09-06 22:53:35'),
(21, 'Renato', 'renato@gesnot.cl', 'Asalgado', 'Odaglasa', '17.856.963-1', 945698741, '2023-09-06 22:53:35'),
(22, 'Adolfo', 'a@gmail.com', 'Mayorga', 'Schweinsteiger', '23.132.321-3', 948775552, '2023-09-06 22:53:35'),
(23, 'Renato', 'djfh@gmail.com', 'González', 'Schweinsteiger', '12.685.641-2', 923456987, '2023-09-06 22:53:35'),
(24, 'Nicolas', 'adolfo@gesnot.cl', 'Norambuena', 'Notredame', '12.685.641-2', 948775552, '2023-09-06 22:53:35'),
(25, 'Adolfo', 'snapers15@gmail.com', 'Mayorga', 'Odaglasa', '23.132.321-3', 945698741, '2023-09-06 22:53:35'),
(26, 'Andres Alejandro', 'snapers15@gmail.com', 'Gonzalez', 'Schweinsteiger', '1.985.761-3', 923456987, '2023-09-06 22:53:35'),
(27, 'Andres Alejandro', 'andrs.gonzez@gmail.com', 'Gonzalez', 'Galaz', '21.515.151-5', 987654321, '2023-09-06 22:53:35'),
(28, 'Renato', 'andrs.gonzez@gmail.com', 'González', 'Odaglasa', '1.985.761-3', 926045048, '2023-09-06 22:53:35'),
(29, 'Andres Alejandro', 'snapers15@gmail.com', 'Gonzalez', 'Schweinsteiger', '1.985.761-3', 923456987, '2023-09-06 22:53:35'),
(30, 'Andres Alejandro', 'snapers15@gmail.com', 'Gonzalez', 'Schweinsteiger', '1.985.761-3', 923456987, '2023-09-06 22:53:35'),
(31, 'Consequatur omnis od', 'fohib@mailinator.com', 'Deserunt velit dolo', 'Modi facere sed est ', '69785946-2', 1, '2023-09-09 12:21:27'),
(32, 'andres', 'pelyfehylo@mailinator.com', 'Rerum asperiores vol', 'Tempore vel dolorib', '69785946-2', 1, '2023-09-09 12:22:50'),
(33, 'pepe lucho', 'befufymu@mailinator.com', 'Quisquam cumque cons', 'Aliqua Eligendi con', '69785946-2', 1, '2023-09-09 12:24:23'),
(34, 'jaciento', 'nirysiqyme@mailinator.com', 'Lorem amet praesent', 'Quas dolor fugiat co', '69785946-2', 1, '2023-09-09 12:26:45'),
(35, 'Natus tempor laborum', 'nujetoka@mailinator.com', 'Fugiat dolores illo ', 'Adipisci aperiam asp', '69785946-2', 1, '2023-09-09 12:28:55'),
(36, 'Sint quis est rerum', 'bizofi@mailinator.com', 'Consequatur iste lab', 'Totam vel dolore vol', '69785946-2', 1, '2023-09-11 10:39:20'),
(37, 'Iure autem aut incid', 'disiryvi@mailinator.com', 'Laborum quia et sunt', 'Repudiandae dolor nu', '69785946-2', 1, '2023-09-11 10:47:13'),
(38, 'Mollitia quia sapien', 'funaj@mailinator.com', 'Commodo sint vero d', 'Dolorem culpa enim ', '69785946-2', 1, '2023-09-13 18:18:10'),
(39, 'Incididunt assumenda', 'mebelimyma@mailinator.com', 'Possimus autem repu', 'Rerum consequuntur i', '-', 1, '2023-09-13 18:22:07'),
(40, 'Sed magni dolores fu', 'gubiduq@mailinator.com', 'Aliqua Commodo dolo', 'Molestiae deserunt r', '19858761-3', 1, '2023-09-13 18:25:13'),
(41, 'Andres ', 'andres.gesnot@gmail.com', 'registro', 'Nemo minim sed quos ', '19858761-3', 1, '2023-09-13 18:29:14'),
(42, 'Voluptas rerum reici', 'wovypuhu@mailinator.com', 'Vitae dolores assume', 'Quod mollitia nemo t', '69785946-2', 1, '2023-09-16 23:17:48'),
(43, 'fdgdfgfd', 'mendoza.ing1826@gmail.com', 'gfdgfd', 'gdfgdfg', '69785946-2', 936983242, '2023-09-16 23:19:59'),
(44, 'Qui magnam consequat', 'mendoza.ing1826@gmail.com', 'Facilis nostrud est', 'Enim et reprehenderi', '69785946-2', 936983242, '2023-09-16 23:47:53'),
(45, 'Andres', 'andrs.gonzez@gmail.com', 'fsdfdsfdsfs', 'apellido', '69785946-2', 5345, '2023-09-18 18:09:54');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo` (`tipo`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `meses`
--
ALTER TABLE `meses`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notarias`
--
ALTER TABLE `notarias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notaria` (`notaria`),
  ADD KEY `horario` (`horario`),
  ADD KEY `usuario` (`usuario`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244445;

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `meses`
--
ALTER TABLE `meses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `notarias`
--
ALTER TABLE `notarias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD CONSTRAINT `documentos_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `tipo_documento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`notaria`) REFERENCES `notarias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservas_ibfk_2` FOREIGN KEY (`horario`) REFERENCES `horarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservas_ibfk_3` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
